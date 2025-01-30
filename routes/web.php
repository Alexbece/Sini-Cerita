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

// Page Konselor
Route::get('/konselor', function () {
    return view('client.konselor.index');
})->name('page_konselor');

// Page Artikel
Route::get('/artikel', function() {
    return view     ('client.artikel.index');
})->name('artikel');

Route::get('/judul-artikel', function() {
    return view     ('client.artikel.blog_page');
})->name('blog_page');