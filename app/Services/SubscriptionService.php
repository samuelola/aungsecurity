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

        return Subscription::create([
            'user_id' => $user->id,
            'subscription_plan_id' => $planId,
            'billing_cycle' => $billingCycle,
            'starts_at' => $start,
            'ends_at' => $end,
            'status' => 'active'
        ]);
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