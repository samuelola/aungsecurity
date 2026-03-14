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
        ->where('ends_at', '>', now())
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
}