<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BroadcastGuardMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('dokter')->check()) {
            Auth::shouldUse('dokter');
        } elseif (Auth::guard('web')->check()) {
            Auth::shouldUse('web');
        }

        return $next($request);
    }

}
