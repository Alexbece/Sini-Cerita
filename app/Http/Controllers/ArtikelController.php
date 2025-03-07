<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{

    public function showPasien(Request $request)
    {
        // Ambil kategori dari query string URL
        $category = $request->query('category');

        // Ambil artikel berdasarkan kategori, jika tidak ada kategori ambil semua
        if ($category) {
            $artikels = Artikel::where('category_artikel', $category)->orderBy('created_at')->get();
        } else {
            $artikels = Artikel::orderBy('created_at')->get();
        }

        // Kirim data artikel ke tampilan
        return view('client.pasien.artikel.index', compact('artikels'));
    }

    public function Artikel($id_artikel)
    {
        $artikel = Artikel::where('id_artikel', $id_artikel)->firstOrFail();
        return view('client.pasien.artikel.artikel ', compact('artikel'));
    }

    // ADMIN
    public function showAdmin()
    {
        return view('client.admin.artikel.add_artikel');
    }
    public function listArtikel()
    {
        $artikels = Artikel::orderBy('created_at')->get();
        return view('client.admin.artikel.list_artikel', compact('artikels'));
    }

    public function addArtikel(Request $request)
    {
        $dataArtikel = $request->validate([
            'title_artikel' => 'required',
            'content' => 'required|string',
            'category_artikel' => 'required|in:Burnout,Gangguan Mood,Depresi,Keluarga & Hubungan',
        ]);

        Artikel::create($dataArtikel);

        return redirect()->route('list-artikel');
    }

    public function deleteArtikel($id_artikel)
    {
        $artikel = Artikel::where('id_artikel', $id_artikel)->firstOrFail();
        $artikel->delete();

        return redirect()->route('list-artikel')->with('success', 'Artikel berhasil dihapus.');
    }
}
