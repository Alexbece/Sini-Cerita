<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class OauthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $emailUsedInUser = User::where('email', $googleUser->email)->exists();
        $emailUsedInDokter = \App\Models\Dokter::where('email', $googleUser->email)->exists();

        $registeredUser = User::where('google_id', $googleUser->id)
            ->orWhere('email', $googleUser->email)
            ->first();

        if (!$registeredUser && ($emailUsedInUser || $emailUsedInDokter)) {
            return redirect('/masuk')->withErrors([
                'email' => 'Email ini sudah digunakan!',
            ]);
        }


        if (!$registeredUser) {
            $randomPassword = Str::password(15);

            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ], [
                'nama_lengkap'         => $googleUser->name,
                'foto_profil'          => $googleUser->avatar,
                'email'                => $googleUser->email,
                'no_telp'              => null,
                'password'             => Hash::make($randomPassword),
                'google_token'         => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
                'role_id'              => 1,
            ]);

            Auth::login($user);
            session(['role_id' => $user->role_id]);

            return redirect('/');
        }

        Auth::login($registeredUser);
        session(['role_id' => $registeredUser->role_id]);

        if ($registeredUser->role_id == 1) {
            return redirect('/')->with('berhasil-login', 'Selamat, Anda berhasil login!');
        } elseif ($registeredUser->role_id == 3) {
            return redirect('/dashboard-admin')->with('berhasil-login', 'Selamat, Anda berhasil login!');
        } else {
            return redirect('/')->with('berhasil-login', value: 'Selamat, Anda berhasil login!');
        }
    }
}
