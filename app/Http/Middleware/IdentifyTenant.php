<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Tenant;

class IdentifyTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $subdomain = $request->route('tenant');
        $tenant = Tenant::where('subdomain', $subdomain)->first();
    
        if (! $tenant) {
            abort(404, "Tenant not found");
        }

        // Share tenant globally
        app()->instance('tenant', $tenant);

         // Use this in controllers: app('tenant')
        return $next($request);
    }
}
