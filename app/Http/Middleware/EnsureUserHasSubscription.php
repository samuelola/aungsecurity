<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Subscription;

class EnsureUserHasSubscription
{
    public function handle(Request $request, Closure $next)
    {
        $subscription = Subscription::where('user_id', auth()->id())
            ->where('status', 'active')
            ->where('ends_at', '>', now())
            ->first();

        if (!$subscription) {
            return redirect()->back()->with('error', 'You need an active subscription.');
        }

        return $next($request);
    }
}
