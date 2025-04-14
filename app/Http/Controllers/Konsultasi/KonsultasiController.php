<?php

namespace App\Http\Controllers\Konsultasi;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index(Request $request)
    {
        $jenisDokter = $request->jenis_dokter;

        $dokter = Dokter::query();

        // Jika ada jenis_dokter di URL, filter berdasarkan itu
        if ($jenisDokter) {
            $dokter->where('jenis_dokter', $jenisDokter);
        }

        $dokters = $dokter->paginate(3)->withQueryString();

        return view('client.pasien.konsultasi.index', compact('dokters'));
    }

    public function detailDokter($id)
    {
        $dokter = Dokter::findOrFail($id);

        return view('client.pasien.konsultasi.detail_dokter', compact('dokter'));
    }
}
