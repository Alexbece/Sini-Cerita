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

        $registeredUser = User::where('google_id', $googleUser->id)->first();

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
            return redirect('/');
        }

        Auth::login($registeredUser);
        return redirect('/');
    }
}
