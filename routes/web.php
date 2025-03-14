<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\ValidasiDokter;
use Illuminate\Support\Facades\Route;
use App\Livewire\SignupDokter;

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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout-user');

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

// PROFIL PASIEN
Route::get('/profil-user', function () {
    return view('client.pasien.profil.index');
})->name('profil-user');
Route::get('/hapus-akun-user', [AuthController::class, 'deleteAccount'])->name('hapus-akun');


// KONSULTASI
// LIST KONSELOR
Route::get('/konsultasi', function () {
    return view('client.pasien.konsultasi.index');
})->name('konsultasi-index');
// DETAIL KONSELOR
Route::get('/detail-dokter', function () {
    return view('client.admin.konselor.detail_dokter');
})->name('detail-dokter');

// ARTIKEL EDUKASI
Route::get('/artikel-edukasi', [ArtikelController::class, 'showPasien'])->name('artikel-edukasi');
Route::get('/artikel/{id_artikel}', [ArtikelController::class, 'Artikel'])->name('app-artikel');


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

// ADMIN
// DASHBOARD ADMIN
Route::get('/dashboard-admin', function () {
    return view('client.admin.index');
})->name('dashboard-admin');

// KONSELOR
// DAFTAR KONSELOR
Route::get('/list-dokter', function () {
    return view('client.admin.konselor.list_dokter');
})->name('list-dokter');

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
