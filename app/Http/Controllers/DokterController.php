<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\password;

class DokterController extends Controller
{
    public function showLoginDokter()
    {
        return view('client.autentikasi.login_dokter');
    }

    /**
     * Simpan data dokter.
     */
    public function loginDokter(Request $request)
    {
        $request->validate([
            'no_strpk'  => 'required',
            'email'     => 'required|email:rfc,dns',
            'password'  => 'required|min:6',
        ], [
            'no_strpk.required' => 'No. STRPK wajib diisi!',
            'email.required'    => 'Email wajib diisi!',
            'email.email'       => 'Isi email dengan benar!',
            'password.required' => 'Password wajib diisi!',
            'password.min'      => 'Password memiliki minimal 6 huruf!',
        ]);

        $dokter = Dokter::where('no_strpk', $request->no_strpk)->first();

        if (!$dokter) {
            return back()->withErrors([
                'no_strpk' => 'No. STRPK tidak terdaftar!',
            ])->onlyInput('no_strpk');
        }

        if ($dokter->email !== $request->email) {
            return back()->withErrors([
                'email' => 'Email tidak sesuai dengan No. STRPK!',
            ])->onlyInput('email');
        }

        if ($dokter->status_validasi_data === 'pending') {
            return back()->withErrors([
                'no_strpk' => 'Data anda belum diverifikasi oleh pihak kami!',
            ])->onlyInput('no_strpk');
        }

        if (!Hash::check($request->password, $dokter->password)) {
            return back()->withErrors([
                'password' => 'Password salah!',
            ])->onlyInput('email');
        }

        Auth::login($dokter);
        session([
            'role_id'   => $dokter->role_id,
            'dokter_id' => $dokter->id, // Simpan ID dokter di session
        ]);

        return redirect('/');
    }
}
