<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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

        Auth::guard('dokter')->login($dokter);
        session([
            'dokter_id' => $dokter->id,
            'role_id' => $dokter->role_id,
        ]);

        return redirect('/dashboard-dokter');
    }

    public function logoutDokter(Request $request)
    {
        Auth::guard('dokter')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function indexDokter()
    {
        $dokter = Auth::guard('dokter')->user();
        // $totalLayanan = Pembayaran::where('dokter_id', $dokter->id)->count();

        return view('client.dokter.index', compact('dokter'));
    }

    public function changeStatus(Request $request)
    {
        // Ambil data dokter yang sedang login
        $dokterId = session('dokter_id');

        $dokter = Dokter::find($dokterId);

        // Validasi input status yang diterima
        $request->validate([
            'status' => 'nullable|in:online,offline', // Pastikan status yang diterima valid
        ]);

        // Perbarui status dokter jika status ada di request
        if ($request->has('status')) {
            $dokter->status = $request->input('status');
        }

        // Simpan perubahan status ke dalam database
        $dokter->save();

        // Kembali ke halaman sebelumnya
        return redirect()->back();
    }

    public function riwayatKonsultasi()
    {
        $dokter = Dokter::find(Session::get('dokter_id'));
        return view('client.dokter.riwayat_konsultasi.index', compact('dokter'));
    }

    public function getLatestNotifications(Request $request)
    {
        // Ambil 5 notifikasi terbaru dengan status 'paid'
        $notifikasi = Pembayaran::with('user')
            ->where('dokter_id', auth()->guard('dokter')->user()->id)
            ->where('status', 'paid')
            ->latest()
            ->take(5)
            ->get();

        return response()->json($notifikasi);
    }

    public function pesananLayanan()
    {
        $dokter = Auth::guard('dokter')->user();
        return view('client.dokter.pesanan_layanan', compact('dokter'));
    }

    public function profilDokter()
    {
        $dokter = Auth::guard('dokter')->user();
        return view('client.dokter.profil_dokter', compact('dokter'));
    }
}
