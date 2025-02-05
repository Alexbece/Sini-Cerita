<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.landing.home');
})->name('home');
Route::get('/home', function () {
    return view('client.landing.landing');
})->name('landing');

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

// Page Artikel
Route::get('/artikel', function () {
    return view('client.artikel.index');
})->name('artikel');

Route::get('/judul-artikel', function () {
    return view('client.artikel.blog_page');
})->name('blog_page');

// Account Pasien
Route::get('/profil', function () {
    return view('client.profil.profil_user.index');
})->name('profil');

Route::get('/profil/identitas', function () {
    return view('client.profil.profil_user.identitas');
});

Route::get('/profil/riwayat', function () {
    return view('client.profil.profil_user.riwayat');
});

// Konsultasi
Route::get('/konsultasi', function () {
    return view('client.konsultasi.index');
})->name('pagekonsultasi');

// Tentang Kami
Route::get('/tentang-kami', function () {
    return view('client.tentangkami.index');
})->name('tentangkami');