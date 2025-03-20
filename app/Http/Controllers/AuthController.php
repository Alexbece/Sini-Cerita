<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

        // Generate avatar berdasarkan inisial email
        $initial = strtoupper(substr($request->email, 0, length: 1));
        $avatar = "https://ui-avatars.com/api/?name={$initial}&background=4BB5C1&color=fff";

        // ENKRIPSI PASSWORD DARI INPUT
        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['foto_profil'] = $avatar; // Tambahkan ke dalam data yang akan disimpan

        // SIMPAN INPUT KEDALAM DATABASE
        $validateData['role_id'] = 1;
        User::create($validateData);

        return redirect('/masuk')->with('berhasil-signup', 'Selamat, Anda berhasil mendaftar!');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama_lengkap'  => 'nullable',
            'email' => 'nullable|email|unique:users,email,' . Auth::id(),
            'no_telp'       => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/',
            'foto_profil'   => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $user->nama_lengkap = $request->nama_lengkap;
        $user->email        = $request->email;
        $user->no_telp      = $request->no_telp;

        if ($request->hasFile('foto_profil')) {
            // Hapus foto lama jika itu file lokal
            if ($user->foto_profil && Storage::exists('public/' . $user->foto_profil)) {
                Storage::delete('public/' . $user->foto_profil);
            }

            // Simpan foto baru
            $file = $request->file('foto_profil');
            $path = $file->store('user/foto_profil', 'public'); // Simpan di storage/app/public/user/foto_profil
            $user->foto_profil = $path; // Simpan path tanpa 'public/'
        }


        $user->save();

        return redirect('profil-user');
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
