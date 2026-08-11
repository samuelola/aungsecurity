<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Kyc;
use App\Models\Subscription;
use Carbon\Carbon;

class TenantUserDashboardComposer
{
    public function compose(View $view)
    {
        $tenant = app('tenant');
        $user = auth()->user();

        $trialActive = false;
        $trialDaysLeft = 0;
        $trialProgress = 0;

        if ($tenant && $user) {

            /*
            |--------------------------------------------------------------------------
            | Free Trial
            |--------------------------------------------------------------------------
            */

            if (
                $tenant->free_trial_enabled &&
                $tenant->trial_start_date &&
                $tenant->trial_end_date
            ) {

                $start = Carbon::parse($tenant->trial_start_date);
                $end = Carbon::parse($tenant->trial_end_date);

                /*
                |--------------------------------------------------------------------------
                | Check if trial is currently active
                |--------------------------------------------------------------------------
                */

                if (now()->between($start, $end)) {

                    $trialActive = true;

                    /*
                    |--------------------------------------------------------------------------
                    | Days remaining
                    |--------------------------------------------------------------------------
                    */

                    // $trialDaysLeft = now()->diffInDays($end);
                    $trialDaysLeft = (int) ceil(now()->diffInHours($end) / 24);

                    /*
                    |--------------------------------------------------------------------------
                    | Trial progress
                    |--------------------------------------------------------------------------
                    */

                    $totalTrialDays = max(
                        1,
                        $start->diffInDays($end)
                    );

                    $elapsedDays = $start->diffInDays(now());

                    $trialProgress = min(
                        100,
                        max(
                            0,
                            ($elapsedDays / $totalTrialDays) * 100
                        )
                    );
                }
            }
        }

        $view->with([
            'trialActive' => $trialActive,
            'trialDaysLeft' => $trialDaysLeft,
            'trialProgress' => $trialProgress,
        ]);
    }
}

