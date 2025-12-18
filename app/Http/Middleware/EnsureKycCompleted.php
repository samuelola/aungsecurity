<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Kyc;

class EnsureKycCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $tenant = app('tenant');
        $user = auth()->user();
        
        $kyc = Kyc::where('user_id', $user->id)
                ->where('tenant_id', $tenant->id)
                ->first();

        if (!$kyc || !$kyc->kyc_completed) {
            return redirect()->route('kyc.verify', $tenant->subdomain);
        }

        return $next($request);
    }


}
