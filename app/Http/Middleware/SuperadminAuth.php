<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminAuth
{
    public function handle(Request $request, Closure $next)
    {
    
        // User must be logged in
        if (!Auth::check()) {
            return redirect()->route('superadmin_login');
        }

        return $next($request);
    }

    
}
