<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateUserOrDokter
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('web')->check()) {
            auth()->setUser(Auth::guard('web')->user());
            return $next($request);
        }

        if (Auth::guard('dokter')->check()) {
            auth()->setUser(Auth::guard('dokter')->user());
            return $next($request);
        }

        abort(401, 'Unauthorized');

    }
}
