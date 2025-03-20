<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DaftarDokterController extends Controller
{
    public function show()
    {
        $dokters = Dokter::where('status_validasi_data', 'approved')->paginate(1);
        return view('client.admin.konselor.list_dokter', compact('dokters'));
    }

    public function detailDokter($id_dokter)
    {
        $dokter = Dokter::where('id', $id_dokter)->firstOrFail();

        return view('client.admin.konselor.detail_dokter', compact('dokter'));
    }
}
