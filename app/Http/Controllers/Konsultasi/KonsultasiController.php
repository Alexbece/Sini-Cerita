<?php

namespace App\Http\Controllers\Konsultasi;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $dokters = Dokter::where('status', 'online')
            ->where('status_validasi_data', 'approved')
            ->get();

        return view('client.pasien.konsultasi.index', compact('dokters'));
    }

    public function detailDokter($id)
    {
        $dokter = Dokter::findOrFail($id);

        return view('client.pasien.konsultasi.detail_dokter', compact('dokter'));
    }
}
