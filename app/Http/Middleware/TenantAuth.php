<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tenant;

class TenantAuth
{
    public function handle(Request $request, Closure $next)
    {
        

        // Extract subdomain
        $subdomain = $this->getSubdomain($request);

        // Find tenant
        $tenant = Tenant::where('subdomain', $subdomain)->first();

        // User must be logged in
        if (!Auth::check()) {
            return redirect()->route('tenant_user_login', $tenant->subdomain);
        }

        if (!$tenant) {
            abort(404);
        }

        // Ensure logged-in user belongs to tenant
        if (Auth::user()->tenant_id !== $tenant->id) {
            Auth::logout();
            abort(403, 'Unauthorized tenant access');
        }

        // Share tenant globally (optional)
        view()->share('tenant', $tenant);

        return $next($request);
    }

    private function getSubdomain(Request $request): string
    {
        return explode('.', $request->getHost())[0];
    }
}
