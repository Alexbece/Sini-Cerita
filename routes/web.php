<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('client.landing.landing');
});
Route::get('/signup', function () {
    return view('client.auth.sign_up');
});
Route::get('/login', function () {
    return view('client.auth.login');
});
