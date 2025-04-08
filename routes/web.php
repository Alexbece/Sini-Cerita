<?php

use App\Models\User;
use App\Models\Dokter;
use App\Events\OrderPaid;
use App\Events\MessageSent;
use App\Models\ChatMessage;
use App\Livewire\SignupDokter;
use App\Http\Middleware\GuestOnly;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ValidasiDokter;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\OauthController;
use App\Http\Middleware\DokterMiddleware;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ArtikelController;
use App\Http\Middleware\EnsureUserIsNotGuest;
use App\Http\Controllers\Admin\DaftarUserController;
use App\Http\Controllers\Admin\DaftarDokterController;
use App\Http\Controllers\Konsultasi\KonsultasiController;
use App\Http\Controllers\Pembayaran\PembayaranController;
use Livewire\Features\SupportFileUploads\FileUploadController;

// INDEX APP
Route::get('/', function () {
    return view('client.index');
})->name('app-index');

// AUTENTIKASI
// SIGN UP
Route::get('/daftar', [AuthController::class, 'showSignup'])->name('signup-user');
Route::post('/daftar', [AuthController::class, 'signup'])->name('proses-signup-user');
// LOGIN
Route::get('/masuk', [AuthController::class, 'showLogin'])->name('login-user');
Route::post('/masuk', [AuthController::class, 'login'])->name('proses-login-user');
// LOGOUT   

// OAUTH GOOGLE
Route::get('/oauth/google', [OauthController::class, 'redirect']);
Route::get('/oauth/google/callback', [OauthController::class, 'callback']);
// END OAUTH GOOGLE

// SIGNUP DOKTER
Route::get('/daftar-dokter', function () {
    return view('components.layouts.app');
})->name('signup-dokter');
Route::get('/masuk-dokter', [DokterController::class, 'showLoginDokter'])->name('login-dokter');
Route::post('/masuk-dokter', [DokterController::class, 'loginDokter'])->name('proses-login-dokter');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout-user')->middleware([UserMiddleware::class]);
Route::post('/logout-dokter', [DokterController::class, 'logoutDokter'])->name('logout.dokter')->middleware([DokterMiddleware::class]);


// PROFIL PASIEN
Route::get('/profil-user', function () {
    return view('client.pasien.profil.index');
})->name('profil-user')->middleware(EnsureUserIsNotGuest::class);
Route::post('/profil-user', [AuthController::class, 'updateProfile'])->name('update-profil.user');
Route::get('/hapus-akun-user', [AuthController::class, 'deleteAccount'])->name('hapus-akun');

// KONSULTASI
// LIST KONSELOR
Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi-index');
// DETAIL DOKTER
Route::get('/konsultasi/detail-dokter-jiwa/{id}', [KonsultasiController::class, 'detailDokter'])->name('detail.dokter')->middleware(EnsureUserIsNotGuest::class);
// PEMBAYARAN
Route::get('/informasi-pembayaran/{dokter_id}', [PembayaranController::class, 'checkout'])->name('checkout')->middleware(EnsureUserIsNotGuest::class);
Route::post('/proses-pembayaran', [PembayaranController::class, 'prosesPembayaran'])->name('proses.pembayaran');

Route::post('/midtrans/callback', [PembayaranController::class, 'midtransCallback'])
    ->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class])
    ->name('midtrans.callback');

// ARTIKEL EDUKASI
Route::get('/artikel-edukasi', [ArtikelController::class, 'showPasien'])->name('artikel-edukasi');
Route::get('/artikel-edukasi/{id_artikel}', [ArtikelController::class, 'Artikel'])->name('app-artikel')->middleware(EnsureUserIsNotGuest::class);

// TANTANGAN
Route::get('/tantangan', function () {
    return view('client.pasien.tantangan.index');
})->name('app-tantangan');
// TANTANGAN YOGA
Route::get('/tantangan-yoga', function () {
    return view('client.pasien.tantangan.yoga.index');
})->name('tantangan-yoga');
// PAGE TANTANGAN YOGA
Route::get('/nama-tantangan-yoga', function () {
    return view('client.pasien.tantangan.yoga.page_tantangan');
})->name('page-tantangan-yoga');

// {{------------------------------------------------}}
// {{-------------------- DOKTER --------------------}}
Route::middleware([DokterMiddleware::class])->group(function () {
    // DASHBOARD DOKTER
    Route::get('dashboard-dokter', [DokterController::class, 'indexDokter']);
    Route::get('/dokter/notifikasi-terbaru', [DokterController::class, 'getLatestNotifications'])->name('dokter.notifikasi');

    // GANTI STATUS DOKTER
    Route::post('dashboard-dokter', [DokterController::class, 'changeStatus'])->name('changeStatus');

    Route::get('riwayat-konsultasi-dokter', [DokterController::class, 'riwayatKonsultasi']);
    Route::get('pesanan-layanan', [DokterController::class, 'pesananLayanan']);

    // PROFIL DOKTER
    Route::get('profil-dokter', [DokterController::class, 'profilDokter']);
});
// {{-------------------- END DOKTER --------------------}}
// {{----------------------------------------------------}}

// -------------------- ADMIN
Route::middleware([AdminMiddleware::class])->group(function () {
    // DASHBOARD ADMIN
    Route::get('/dashboard-admin', function () {
        return view('client.admin.index');
    })->name('dashboard-admin');

    // KONSELOR
    // DAFTAR KONSELOR
    Route::get('/list-dokter', [DaftarDokterController::class, 'show'])->name('list-dokter');
    // DETAIL KONSELOR
    Route::get('/detail-dokter/{id_dokter}', [DaftarDokterController::class, 'detailDokter'])->name('detail-dokter');

    // VALIDASI DATA KONSELOR
    Route::get('/dokter-terdaftar', [ValidasiDokter::class, 'index'])->name('dokter-terdaftar');
    Route::get('/verifikasi-dokter/{id}', [ValidasiDokter::class, 'show'])->name('validasidokter.show');
    Route::post('/verifikasi-dokter/{id}/approve', [ValidasiDokter::class, 'approve'])->name('validasidokter.approve');
    Route::post('/verifikasi-dokter/{id}/reject', [ValidasiDokter::class, 'reject'])->name('validasidokter.reject');

    // KLAIM SALDO
    Route::get('/daftar-klaim-saldo', function () {
        return view('client.admin.konselor.klaim-saldo.klaim-saldo');
    })->name('daftar-klaim-saldo');


    // ARTIKEL
    // LIST ARTIKEL
    Route::get('/daftar-artikel', [ArtikelController::class, 'listArtikel'])->name('list-artikel');
    Route::delete('/daftar-artikel/{id_artikel}', [ArtikelController::class, 'deleteArtikel'])->name('delete-artikel');
    // ADD ARTIKEL
    Route::get('/tambah-artikel', [ArtikelController::class, 'showAdmin'])->name('add-artikel');
    Route::post('/tambah-artikel', [ArtikelController::class, 'addArtikel'])->name('proses-add-artikel');

    // DAFTAR USER
    Route::get('/list-user', [DaftarUserController::class, 'show']);
    Route::delete('/list-user/{id}', [DaftarUserController::class, 'deleteUser'])->name('user.delete');
});
// -------------------- END ADMIN
