<?php 

namespace App\Services;

use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\Transaction;
use Carbon\Carbon;
use App\Models\Subaccount;
use Illuminate\Support\Facades\Http;
use App\Mail\SubscriptionExpiryReminder;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NewMessageNotification;
use App\Models\User;


class SubscriptionService
{
    public function subscribe(
        $tenant,
        $user, 
        $planId, 
        $billingCycle,
        $total,
        $vat,
        $pay_as_you_go,
        $access_fee,
        $sub_amount,
        $domain,
        $paystackFee
    )


    {
        
       // check subaccount

        $tenant_subaccount = Subaccount::where('tenant_id',$tenant->id)->first();


        if (!$tenant_subaccount->subaccount_code) {
            throw new \Exception("Estate has no payment subaccount configured.");
        }

        $plan = SubscriptionPlan::findOrFail($planId);

        $start = Carbon::now();

        $end = $billingCycle === 'monthly'
            ? $start->copy()->addMonth()
            : $start->copy()->addYear();

        $activeSubscription = Subscription::where('user_id', auth()->id())
        ->where('status', 'active')
        ->where('ends_at', '>', now())
        ->first();
        
         if ($activeSubscription) {
            throw new \Exception("You already have an active subscription.");
        }

        // Initialize Paystack

        $reference = 'SUB_' . uniqid();

        $platformEarning = $vat + $pay_as_you_go + $access_fee + $paystackFee;
        $new_total = $total + $paystackFee;

        // =========================================================
       //  WALLET FIRST LOGIC
       // =========================================================

       $wallet_bal = (int) $user->wallet->balance;
       $new_totall = (int) $new_total;
       if ($wallet_bal >= $new_totall) {

        \DB::transaction(function () use (
            $user, $total, $planId, $billingCycle,
            $start, $end, $tenant, $vat,
            $pay_as_you_go, $access_fee, $sub_amount
        ) {

            // Refresh to avoid stale balance
            $user->refresh();

            if ($wallet_bal < $new_totall) {
                throw new \Exception("Insufficient wallet balance");
            }

            // Deduct wallet
            $user->wallet->balance -= $total;
            $user->save();

            // Create subscription
            Subscription::create([
                'user_id' => $user->id,
                'subscription_plan_id' => $planId,
                'billing_cycle' => $billingCycle,
                'starts_at' => $start,
                'ends_at' => $end,
                'status' => 'active',
                'tenant_id' => $tenant->id
            ]);

            // Save transaction
            Transaction::create([
                'user_id' => $user->id,
                'tenant_id' => $tenant->id,
                'subscription_id' => $planId,
                'reference' => 'WALLET_' . uniqid(),
                'amount' => $total,
                'platform_earning' => $vat + $pay_as_you_go + $access_fee,
                'tenant_earning' => $sub_amount,
                'currency' => 'NGN',
                'channel' => 'wallet',
                'status' => 'success',
                'paid_at' => now(),
                'fees' => 0,
            ]);


            
        });

        // Notify user
        $user->notify(
            new NewMessageNotification(
                'Subscription Successful',
                "Your subscription of ₦{$total} was paid using your wallet"
            )
        );

        return true;

        // return [
        //     'status' => 'success',
        //     'type' => 'wallet',
        //     'message' => 'Subscription activated using wallet'
        // ];
       }

        $new_total = $total + $paystackFee;

        // =========================================================
        //  FALLBACK TO PAYSTACK
        // =========================================================

        $response = Http::withoutVerifying()
            ->withToken(config('services.paystack.secret'))
            ->post('https://api.paystack.co/transaction/initialize', [
                'email' => $user->email,
                'amount' => (int) $new_total * 100, // kobo
                'reference' => $reference,
                'callback_url' => route('sub_callback',$domain),

                // SPLIT PAYMENT
                'subaccount' => $tenant_subaccount->subaccount_code,
                'transaction_charge' => $platformEarning * 100,
                'bearer' => 'account', // if you want the platform to bear the paystack charge

                'metadata' => [
                    'user_id' => $user->id,
                    'tenant_id' => $tenant->id,
                    'plan_id' => $planId,
                    'billing_cycle' => $billingCycle,
                ]
            ]);

        $data = $response->json();

        if (!$data['status']) {
            throw new \Exception('Payment initialization failed');
        }

        return $data['data']['authorization_url'];

    }


    // Handle callback after payment

public function verifyPaymentAndCreateSubscription($reference)
{
    $response = Http::withoutVerifying()
        ->withToken(config('services.paystack.secret'))
        ->get("https://api.paystack.co/transaction/verify/" . $reference);

    $data = $response->json();

    if (!$data['status'] || $data['data']['status'] !== 'success') {
        throw new \Exception("Payment verification failed.");
    }

    $payment = $data['data'];
    $metadata = $payment['metadata'];

    $userId = $metadata['user_id'];
    $tenantId = $metadata['tenant_id'];
    $planId = $metadata['plan_id'];
    $billingCycle = $metadata['billing_cycle'];

    // Prevent duplicate transaction
    $existing = Transaction::where('reference', $reference)->first();
    if ($existing) {
        return true;
    }

    // Extract amounts
    $totalAmount = $payment['amount'] / 100;

    // platform charge (kobo → naira)
    $platformEarning = ($payment['fees_split']['integration'] ?? 0) / 100;
    $tenantEarning = ($payment['fees_split']['subaccount'] ?? 0) / 100;
    $paystackFees = ($payment['fees_split']['paystack'] ?? 0) / 100;
    $authorization = $data['data']['authorization']['authorization_code'] ?? null;
    $customerCode = $data['data']['customer']['customer_code'] ?? null;

    // Save transaction
    Transaction::create([
        'user_id' => $userId,
        'tenant_id' => $tenantId,
        'subscription_id' => $planId,
        'reference' => $reference,
        'amount' => $totalAmount,
        'platform_earning' => $platformEarning,
        'tenant_earning' => $tenantEarning,
        'currency' => $payment['currency'],
        'channel' => $payment['channel'],
        'status' => $payment['status'],
        'paid_at' => $payment['paid_at'],
        'fees'    => $paystackFees,
    ]);

    // Prevent duplicate subscription
    $activeSubscription = Subscription::where('user_id', $userId)
        ->where('status', 'active')
        ->where('ends_at', '>', now())
        ->first();

    if ($activeSubscription) {
        return true;
    }

    // Create subscription
    $start = now();

    $end = $billingCycle === 'monthly'
        ? now()->addMonth()
        : now()->addYear();

    Subscription::create([
        'user_id' => $userId,
        'subscription_plan_id' => $planId,
        'billing_cycle' => $billingCycle,
        'starts_at' => $start,
        'ends_at' => $end,
        'status' => 'active',
        'authorization_code' => $authorization,
        'customer_code' => $customerCode,
        'tenant_id'     => $tenantId
    ]);

    $userr = User::find($userId);
    $userr->notify(
        new NewMessageNotification(
            'Subscription Successful',
            "Your subscription of ₦{$totalAmount} is successful"
        )
    );

    return true;
}



    public function chargeAuthorization($subscription)
    {
        $plan = $subscription->plan;
        $user = $subscription->user;
        $tenant = $subscription->tenant;

        // Get tenant subaccount
        $subaccount = Subaccount::where('tenant_id', $tenant->id)->first();

        if (!$subaccount || !$subaccount->subaccount_code) {
            throw new \Exception("Tenant has no subaccount");
        }

        // Recalculate pricing
        $basePrice = $plan->price;

        $accessFee = \App\Enums\Fee::accessFeeYearly;
        if ($plan->duration === 'monthly') {
            $accessFee = $accessFee / 12;
        }

        $payAsYouGo = ($basePrice * 12.5) / 100;

        $subtotal = $basePrice + $accessFee + $payAsYouGo;

        $vat = ($subtotal * 7.5) / 100;

        $amountBeforePaystack = $subtotal + $vat;

        $paystackFee = $this->calculatePaystackFee($amountBeforePaystack);

        $total = $amountBeforePaystack + $paystackFee;

        // Platform earning (same logic as initial payment)
        $platformEarning = $vat + $payAsYouGo + $accessFee + $paystackFee;
        
        $reference = 'SUB_' . uniqid();
        // Charge with split
        $response = Http::withoutVerifying()
            ->withToken(config('services.paystack.secret'))
            ->post('https://api.paystack.co/transaction/charge_authorization', [
                'authorization_code' => $subscription->authorization_code,
                'email' => $user->email,
                'amount' => (int) round($total * 100),
                'reference' => $reference,
                // ADD THIS (CRITICAL)
                'subaccount' => $subaccount->subaccount_code,
                'transaction_charge' => (int) round($platformEarning * 100),
                'bearer' => 'account',
            ]);

        $data = $response->json();

        if (!$data['status']) {
            throw new \Exception("Auto-renew charge failed: " . json_encode($data));
        }

        // Extend subscription
        $subscription->update([
            'ends_at' => $subscription->billing_cycle === 'monthly'
                ? now()->addMonth()
                : now()->addYear()
        ]);
    }


    function calculatePaystackFee($amount)
    {
        $fee = ($amount * 1.5) / 100;

        if ($amount > 2500) {
            $fee += 100;
        }

        return round(min($fee, 2000), 2);
    }

    public function allPlans(){

       return SubscriptionPlan::where('is_active', true)->get();
    }

    public function currentSubscription(){

       return Subscription::where('user_id', auth()->id())
        ->where('status', 'active')
        ->where('ends_at', '>', now())
        ->first();
    }

    public function cancel($subscription)
    {
        $subscription->update([
            'status' => 'cancelled'
        ]);
    }

    public function isActive($user)
    {
        return $user->subscriptions()
            ->where('status', 'active')
            ->where('ends_at', '>', now())
            ->exists();
    }

    public function getSubscription(){

         $subscription = Subscription::with('plan')
            ->where('user_id', auth()->id())
            ->where('status', 'active')
            ->where('ends_at', '>', now())
            ->first();

         $daysLeft = null;
         $totalDays = null;
         $progress = 0;  
         
         if ($subscription) {
            $start = Carbon::parse($subscription->starts_at);
            $end = Carbon::parse($subscription->ends_at);

            $totalDays = $start->diffInDays($end);
            $daysLeft = ceil(now()->diffInDays($end, false));

            $usedDays = $totalDays - $daysLeft;

            if ($totalDays > 0) {
                $progress = ($usedDays / $totalDays) * 100;
            }
        }

        return [
            'subscription'=> $subscription,
            'daysLeft'    => $daysLeft,
            'progress'    => $progress
        ];    
    }

    public function getUserPlanDetails($id){
        $subscription = SubscriptionPlan::where('is_active', true)
            ->where('id',$id)
            ->first();

        return $subscription;    
    }

    public function allSubscriptions(){

        return Subscription::with('plan')
            ->where('status', 'active')
            ->where('ends_at', '>', now())
            ->simplePaginate(10);
    }

    public function countActiveSubscriptions(){
        return Subscription::where('status', 'active')
            ->where('ends_at', '>', now())
            ->count();
    }
}