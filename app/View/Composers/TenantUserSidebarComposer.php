<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Kyc;
use App\Models\Subscription;

class TenantUserSidebarComposer
{
    public function compose(View $view)
    {
        $tenant = app('tenant');
        $user = auth()->user();

        $kyc = null;
        $hasSubscription = false;
        $canAccessProtectedFeatures = false;
        $hasSubscriptionAccess = false;
        $hasTrial = false;
        

        if ($tenant && $user) {

             /*
            |--------------------------------------------------------------------------
            | KYC
            |--------------------------------------------------------------------------
            */

            $kyc = Kyc::where('tenant_id', $tenant->id)
                ->where('user_id', $user->id)
                ->first();

             /*
            |--------------------------------------------------------------------------
            | Paid Subscription
            |--------------------------------------------------------------------------
            */    

            $hasSubscription = Subscription::where('tenant_id', $tenant->id)
                ->where('user_id', $user->id)
                ->where('status', 'active')
                ->where('ends_at', '>', now())
                ->exists();

            /*
            |--------------------------------------------------------------------------
            | Free Trial
            |--------------------------------------------------------------------------
            */
            
            $hasTrial =
                $tenant->free_trial_enabled &&
                $tenant->trial_start_date &&
                $tenant->trial_end_date &&
                now()->greaterThanOrEqualTo(
                    $tenant->trial_start_date
                ) &&
                now()->lessThanOrEqualTo(
                    $tenant->trial_end_date
                );

            /*
            |--------------------------------------------------------------------------
            | KYC Access
            |--------------------------------------------------------------------------
            */    

            $canAccessProtectedFeatures =
                !$tenant->kyc_required ||
                ($kyc && $kyc->kyc_completed);

            /*
            |--------------------------------------------------------------------------
            | Subscription Access
            |--------------------------------------------------------------------------
            |
            | User can access subscription-protected features if:
            |
            | 1. They have a paid subscription
            | OR
            | 2. The tenant has an active free trial
            |
            */
            
            $hasSubscriptionAccess =
                $hasSubscription || $hasTrial;
        }

        $view->with([
            'tenant' => $tenant,
            'kyc' => $kyc,
            'hasSubscription' => $hasSubscription,
            'canAccessProtectedFeatures' => $canAccessProtectedFeatures,
            'hasTrial' => $hasTrial,
            'hasSubscriptionAccess' => $hasSubscriptionAccess,
        ]);
    }
}