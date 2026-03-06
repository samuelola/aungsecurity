<?php 

namespace App\Services;

use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use Carbon\Carbon;

class SubscriptionService
{
    public function subscribe($user, $planId, $billingCycle)
    {
        $plan = SubscriptionPlan::findOrFail($planId);

        $start = Carbon::now();

        $end = $billingCycle === 'monthly'
            ? $start->copy()->addMonth()
            : $start->copy()->addYear();

        $activeSubscription = Subscription::where('user_id', auth()->id())
        ->where('status', 'active')
        ->first();
        
         if ($activeSubscription) {
            throw new \Exception("You already have an active subscription.");
        }

        Subscription::create([
            'user_id' => $user->id,
            'subscription_plan_id' => $planId,
            'billing_cycle' => $billingCycle,
            'starts_at' => $start,
            'ends_at' => $end,
            'status' => 'active'
        ]);

        return true;
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
}