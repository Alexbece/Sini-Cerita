<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\OauthController;
use Illuminate\Support\Facades\Route;
use App\Livewire\SignupDokter;

Route::get('/beranda', function () {
    return view('client.landing.home');
})->name('home');
Route::get('/beranda', function () {
    return view('client.landing.home');
})->name('home');

// Page Auth
Route::get('/signup', function () {
    return view('client.auth.sign_up');
})->name('signup');
Route::get('/login', function () {
    return view('client.auth.login');
})->name('login');

// Konselor Login

Route::get('/login-konselor', function () {
    return view('client.auth.konselor.konselorLogin');
})->name('konselorLogin');
Route::get('/signup-konselor', function () {
    return view('client.auth.konselor.konselorSignUp');
})->name('konselorSignUp');


// Page Konselor
Route::get('/konselor', function () {
    return view('client.konselor.index');
})->name('page_konselor');
Route::get('/identitas-konselor', function () {
    return view('client.konselor.profilKonselor');
})->name('profilKonselor');

// Page Artikel
Route::get('/artikel', function () {
    return view('client.artikel.index');
})->name('artikel');

Route::get('/judul-artikel1', function () {
    return view('client.artikel.blog_page');
})->name('blog_page');

// Profil Pasien
Route::get('/profil-user1', function () {
    return view('client.profil.profil_user.index');
})->name('profil-user1');

Route::get('/profil/identitas', function () {
    return view('client.profil.profil_user.identitas');
});

Route::get('/profil/riwayat', function () {
    return view('client.profil.profil_user.riwayat');
});

// Profil Konselor
Route::get('/profil-konselor', function () {
    return view('client.profil.profil_konselor.index');
})->name('profil-konselor');
Route::get('/keuangan-konselor', function () {
    return view('client.profil.profil_konselor.keuangan');
})->name('keuangan-konselor');

// Konsultasi
Route::get('/konsultasi1', function () {
    return view('client.konsultasi.index');
})->name('pagekonsultasi');

// ------------------- Tantangan
Route::get('/tantangan1', function () {
    return view('client.tantangan.tantangan');
})->name('tantangan');

// -------- Kategori Tantangan
Route::get('/tantangan/yoga', function () {
    return view('client.tantangan.yoga');
})->name('yoga');
Route::get('/tantangan/meditasi', function () {
    return view('client.tantangan.meditasi');
})->name('meditasi');
Route::get('/tantangan/rawat-diri', function () {
    return view('client.tantangan.rawat-diri');
})->name('rawat-diri');

// Page-Tantangan
Route::get('/tantangan/yoga/morning-magic', function () {
    return view('client.tantangan.tantangan-yoga');
})->name('tantangan-yoga1');


// -------------------Tentang Kami
Route::get('/tentang-kami', function () {
    return view('client.tentangkami.index');
})->name('tentangkami');

// --------------- Admin 
// ---------- Menu Konselor 

// ----- Daftar Konselor
Route::get('/daftar-konselor', function () {
    return view('admin.konselor.daftar-konselor');
})->name('daftar-konselor');
Route::get('/detail-konselor1', function () {
    return view('admin.konselor.detail-konselor');
})->name('detail-konselor1  ');

// ----- Pendaftaran
Route::get('/pendaftaran-konselor', function () {
    return view('admin.konselor.verifikasi-konselor.pendaftaran');
})->name('pendaftaran');
Route::get('/verifikasi-konselor', function () {
    return view('admin.konselor.verifikasi-konselor.verifikasi');
})->name('verifikasi');

// ----- Klaim Saldo
Route::get('/daftar-klaim', function () {
    return view('admin.konselor.klaim-saldo.daftar-klaim');
})->name('daftar-klaim');

// ---------- Menu Riwayat Konsultasi
Route::get('/riwayat-konsultasi', function () {
    return view('admin.riwayat-konsultasi');
})->name('riwayat-konsultasi');

// LAYOUT FOLDER BARU
// INDEX APP
Route::get('/', function () {
    return view('client.pasien.index');
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
Route::get('/signup-dokter', [function () {
    return view('components.layouts.app');
}]);
Route::get('/pendaftaran-konselor', [DokterController::class, 'showSignup'])->name('pendaftaran-konselor');
Route::post('/pendaftaran-konselor', [DokterController::class, 'store'])->name('proses-pendaftaran-konselor');


// PROFIL PASIEN
Route::get('/profil-user', function () {
    return view('client.pasien.profil.index');
})->name('profil-user');


// KONSULTASI
// LIST KONSELOR
Route::get('/konsultasi', function () {
    return view('client.pasien.konsultasi.index');
})->name('konsultasi-index');
// DETAIL KONSELOR
Route::get('/detail-konselor', function () {
    return view('client.pasien.konsultasi.detail_konselor');
})->name('detail-konselor');

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

// ARTIKEL
// LIST ARTIKEL
Route::get('/daftar-artikel', [ArtikelController::class, 'listArtikel'])->name('list-artikel');
Route::delete('/daftar-artikel/{id_artikel}', [ArtikelController::class, 'deleteArtikel'])->name('delete-artikel');
// ADD ARTIKEL
Route::get('/tambah-artikel', [ArtikelController::class, 'showAdmin'])->name('add-artikel');
Route::post('/tambah-artikel', [ArtikelController::class, 'addArtikel'])->name('proses-add-artikel');
