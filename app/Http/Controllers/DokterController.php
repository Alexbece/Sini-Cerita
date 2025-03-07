<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    public function showSignup()
    {
        return view('client.autentikasi.signup_dokter');
    }

    /**
     * Simpan data dokter.
     */
    public function store(Request $request)
    {
        dd($request->all());

        $validatedData = $request->validate([
            // Validasi Biodata
            'nama_lengkap'  => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:pria,wanita',
            'alamat'        => 'required|string',
            'email'         => 'required|email|unique:dokter,email',
            'no_telp'       => 'required|string',
            'password'      => 'required|string|min:8',
            'foto_profil'   => 'nullable|image|max:1024',
            'foto_wajah'    => 'nullable|image|max:1024',
            'foto_ktp'      => 'nullable|image|max:1024',

            // Validasi Dokumen Kedokteran
            'foto_strpk'    => 'nullable|image|max:1024',
            'no_strpk'      => 'required|string|unique:dokter,no_strpk',
            'strpk_expired' => 'required|date',
            'foto_sippk'    => 'nullable|image|max:1024',
            'no_sippk'      => 'required|string|unique:dokter,no_sippk',
        ]);

        // Hash password sebelum menyimpan
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Simpan ke database
        Dokter::create($validatedData);

        return redirect()->back()->with('message', 'Daftar Berhasil');
    }
}
