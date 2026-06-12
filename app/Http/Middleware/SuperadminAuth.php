<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Use superadmin guard explicitly
        //Add strict guard separation
        if (!Auth::guard('superadmin')->check()) {
            return redirect()->route('superadmin_login');
        }

        $user = Auth::guard('superadmin')->user();

        // Ensure role is actually superadmin
        if (!$user || !$user->isSuperAdmin()) {
            abort(403, 'Unauthorized access');
        }

        return $next($request);
    }

    
}
