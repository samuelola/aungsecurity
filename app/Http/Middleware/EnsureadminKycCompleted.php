<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Kyc;

class EnsureadminKycCompleted
{
    public function handle(Request $request, Closure $next)
    {
        $tenant = app('tenant');
        $user = $request->user();

        if (!$user) {
            return redirect()->route(
                'tenant_user_login',
                $tenant->subdomain
            );
        }

        /*
        |--------------------------------------------------------------------------
        | KYC DISABLED FOR THIS TENANT
        |--------------------------------------------------------------------------
        */

        if (!$tenant->kyc_required) {
            return $next($request);
        }

        /*
        |--------------------------------------------------------------------------
        | KYC REQUIRED
        |--------------------------------------------------------------------------
        */

        $kycCompleted = Kyc::where('user_id', $user->id)
            ->where('tenant_id', $tenant->id)
            ->where('kyc_completed', true)
            ->exists();

        if (!$kycCompleted) {
            return redirect()->route(
                'adminkyc.verify',
                $tenant->subdomain
            );
        }

        return $next($request);
    }
}
