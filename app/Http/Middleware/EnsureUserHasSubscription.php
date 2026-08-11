<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Subscription;
use Carbon\Carbon;

class EnsureUserHasSubscription
{
    public function handle(Request $request, Closure $next)
    {
        $tenant = app('tenant');
        $user = auth()->user();

        /*
        |--------------------------------------------------------------------------
        | Check Paid Subscription
        |--------------------------------------------------------------------------
        */

        $hasSubscription = Subscription::where('tenant_id', $tenant->id)
            ->where('user_id', $user->id)
            ->where('status', 'active')
            ->where('ends_at', '>', now())
            ->exists();
            
         /*
        |--------------------------------------------------------------------------
        | Check Free Trial
        |--------------------------------------------------------------------------
        */    
        
        $hasTrial =
            $tenant->free_trial_enabled &&
            $tenant->trial_start_date &&
            $tenant->trial_end_date &&
            now()->between(
                Carbon::parse($tenant->trial_start_date),
                Carbon::parse($tenant->trial_end_date)
            );
        
        
        /*
        |--------------------------------------------------------------------------
        | Allow Paid Subscription OR Trial
        |--------------------------------------------------------------------------
        */    


        if (!$hasSubscription && !$hasTrial) {
            return redirect()->back()->with('error', 'You need an active subscription or free trial');
        }

        return $next($request);
    }
}
