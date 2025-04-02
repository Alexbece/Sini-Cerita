<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsNotGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah login dan apakah mereka adalah guest
        if (!Auth::check()) {
            session()->flash('GuestDetected', 'Silakan login terlebih dahulu!');
            return redirect('/');
        }

        $user = Auth::user();

        // Cek apakah pengguna adalah guest, misalnya dengan memeriksa apakah role_id null
        if ($user instanceof \App\Models\User) {
            // Jika pengguna adalah admin atau pasien (users table), cek apakah mereka memiliki akses
            if ($user->role_id === null) {
                session()->flash('MustBePasien', 'Silahkan login sebagai pengguna terlebih dahulu!');
                return redirect('/');
            }
        } elseif ($user instanceof \App\Models\Dokter) {
            // Jika pengguna adalah dokter, mereka bisa mengakses halaman yang relevan
            if ($user->role_id === null) {
                session()->flash('MustBeDokter', 'Silahkan login sebagai dokter terlebih dahulu!');
                return redirect('/');
            }
        }

        return $next($request);
    }
}
