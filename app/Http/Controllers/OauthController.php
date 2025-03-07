<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        $registeredUser = User::where('google_id', $googleUser->id)->first();

        if (!$registeredUser) {
            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ], [
                'nama_lengkap'           => $googleUser->name,
                'email'                  => $googleUser->email,
                'no_telp'                => '',
                'password'               => Hash::make('google@123'), // Password default; biasanya tidak digunakan untuk OAuth
                'google_token'           => $googleUser->token,
                'google_refresh_token'   => $googleUser->refreshToken,
            ]);

            Auth::login($user);
            return redirect('/');
        }

        Auth::login($registeredUser);
        return redirect('/');
    }
}
