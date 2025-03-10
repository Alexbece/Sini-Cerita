<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('client.autentikasi.login');
    }

    public function login(Request $request)
    {
        // VALIDASI INPUT
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ], [
            'email.required' => 'Email wajib diisi!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password memiliki minimal 6 huruf!'
        ]);

        // CARI USER BERDASARKAN EMAIL
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // JIKA EMAIL TIDAK DITEMUKAN
            return back()->withErrors([
                'email' => 'Email tidak terdaftar!',
            ])->onlyInput('email');
        }

        if (!Hash::check($request->password, $user->password)) {
            // JIKA PASSWORD SALAH
            return back()->withErrors([
                'password' => 'Password salah!',
            ])->onlyInput('email');
        }

        // AUTENTIKASI USER
        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/')->with('berhasil-login', 'Selamat, Anda berhasil login!');
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
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi!',
            'no_telp.required' => 'Nomor telepon wajib diisi!',
            'no_telp.regex' => 'Nomor telepon hanyan mengandung angka!',
            'email.unique' => 'Email sudah terdaftar!',
            'email.required' => 'Email wajib diisi!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal memiliki 6 huruf!',
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

        return redirect('/');
    }

    public function deleteAccount(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            User::where('id', $user->id)->delete(); // Cara aman
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/')->with('berhasil-hapus', 'Akun Anda berhasil dihapus!');
        }
    }
}
