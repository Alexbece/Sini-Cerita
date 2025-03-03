<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    public function showSignup(){
        return view('client.autentikasi.signup_dokter');
    }

    /**
     * Simpan data dokter.
     */
    public function store(Request $request)
    {
        $request->validate([
            // Validasi Biodata
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:pria,wanita',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:dokter,email',
            'no_telp' => 'required|string|max:20',
            'password' => 'required|string|min:8',
            'foto_profil' => 'image|max:1024',
            'foto_wajah' => 'required|image|max:1024',
            'foto_ktp' => 'required|image|max:1024',
            
            // Validasi Dokumen Kedokteran
            'foto_strpk' => 'required|image|max:1024',
            'no_strpk' => 'required|string|unique:dokter,no_strpk',
            'strpk_expired' => 'required|date',
            'foto_sippk' => 'required|image|max:1024',
            'no_sippk' => 'required|string|unique:dokter,no_sippk',
        ]);

        // Simpan file ke storage
        $fotoProfilPath = $request->file('foto_profil') ? $request->file('foto_profil')->store('uploads/dokter/foto_profil') : null;
        $fotoWajahPath = $request->file('foto_wajah')->store('uploads/dokter/foto_wajah');
        $fotoKtpPath = $request->file('foto_ktp')->store('uploads/dokter/foto_ktp');
        $fotoStrpkPath = $request->file('foto_strpk')->store('uploads/dokter/foto_strpk');
        $fotoSippkPath = $request->file('foto_sippk')->store('uploads/dokter/foto_sippk');

        // Simpan ke database
        Dokter::create([
            'nama_lengkap' => $request->nama_lengkap,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => Hash::make($request->password),
            'foto_profil' => $fotoProfilPath,
            'foto_wajah' => $fotoWajahPath,
            'foto_ktp' => $fotoKtpPath,
            'foto_strpk' => $fotoStrpkPath,
            'no_strpk' => $request->no_strpk,
            'strpk_expired' => $request->strpk_expired,
            'foto_sippk' => $fotoSippkPath,
            'no_sippk' => $request->no_sippk,
        ]);

        return response()->json(['message' => 'Dokter berhasil didaftarkan'], 201);
    }
}
