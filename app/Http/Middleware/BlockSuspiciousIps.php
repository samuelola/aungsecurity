<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\BlockedIp;
use Carbon\Carbon;

class BlockSuspiciousIps
{
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();

        $blocked = BlockedIp::where('ip', $ip)
            ->where('blocked_until', '>', now())
            ->first();

        if ($blocked) {

            $seconds = now()->diffInSeconds($blocked->blocked_until);

            return response()->json([
                'message' => 'Your IP has been temporarily blocked.',
                'retry_after' => $seconds,
            ], 403);
        }

        return $next($request);
    }
}