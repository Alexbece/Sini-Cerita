<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DokterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    protected $proxied = '*';

    public function handle(Request $request, Closure $next): Response
{
    if (!session()->has('role_id') && !Auth::guard('dokter')->check()) {
        abort(404);
    }

    if (
        session()->has('role_id') &&
        !in_array(session('role_id'), [2, 3])
    ) {
        abort(404);
    }

    return $next($request);
}
}
