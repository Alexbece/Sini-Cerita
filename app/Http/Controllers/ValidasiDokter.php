<?php

namespace App\Http\Controllers;

use App\Mail\ValidasiDokter as MailValidasiDokter;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $dokter = Dokter::findOrFail($id);
        $dokter->status_validasi_data = 'approved';
        $dokter->save();

        Mail::to($dokter->email)->send(new MailValidasiDokter($dokter, 'approved'));

        return redirect()->route('dokter-terdaftar')->with('approve', 'Dokter berhasil diterima!');
    }
    public function reject($id)
    {
        $dokter = Dokter::findOrFail($id);
        
        Mail::to($dokter->email)->send(new MailValidasiDokter($dokter, 'rejected'));
        
        $dokter->delete();

        return redirect()->route('dokter-terdaftar')->with('reject', 'Dokter berhasil ditolak!');
    }
}
