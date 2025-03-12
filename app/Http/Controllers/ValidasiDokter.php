<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class ValidasiDokter extends Controller
{
    public function index()
    {

        $dokters = Dokter::where('status_validasi_data', 'pending')->get();
        return view('client.admin.konselor.verifikasi-konselor.pendaftaran', compact('dokters'));
    }

    public function show($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('client.admin.konselor.verifikasi-konselor.verifikasi', compact('dokter'));
    }

    public function approve($id)
    {
        $doctor = Dokter::findOrFail($id);
        $doctor->status_validasi_data = 'approved';
        $doctor->save();

        return redirect()->route('dokter-terdaftar')->with('approve', 'Dokter berhasil diterima!');
    }
    public function reject($id)
    {
        $doctor = Dokter::findOrFail($id);
        $doctor->delete();

        return redirect()->route('dokter-terdaftar')->with('reject', 'Dokter berhasil ditolak!');
    }
}
