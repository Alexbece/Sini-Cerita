<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DaftarUserController extends Controller
{
    public function show()
    {
        $daftarUser = User::where('role', 'pasien')->paginate(10);

        return view('client.admin.daftar-user.index', compact('daftarUser'));
    }

    public function deleteUser($id) {
        $user =  User::findOrFail($id);
        $user->delete();

        return back()->with('berhasil-hapus', 'Berhasil menghapus User');
    }
}
