<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('client.autentikasi.login');
    }

    public function login(Request $request)
    {
        // VALIDASI INPUT
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // COBA AUTENTIKASI
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/')->with('berhasil-login', 'Selamat Anda Berhasil Login');
        }
        return back()->withErrors([
            'email' => 'Periksa kembali email dan password.',
        ])->onlyInput('email');
    }

    public function showSignup()
    {
        return view('client.autentikasi.signup');
    }

    public function signup(Request $request)
    {
        // VALIDASI INPUT SIGNUP
        $validateData = $request->validate([
            'nama_lengkap'  => 'required',
            'no_telp'       => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'email'         => 'required|unique:users,email',
            'password'      => 'required|min:6'
        ]);

        // ENKRIPSI PASSWORD DARI INPUT
        $validateData['password'] = bcrypt($validateData['password']);

        // SIMPAN INPUT KEDALAM DATABASE
        User::create($validateData);

        return redirect('/masuk')->with('berhasil-signup', 'Selamat, Anda berhasil mendaftar!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/daftar');
    }
}
