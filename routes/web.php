<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/logs', function () {
    return view('logs.index');
});

Route::get('/tags', function () {
    return view('auth.login');
});

Route::get('/learning-path', function () {
    return view('auth.login');
});

Route::get('/account', function () {
    return view('auth.register');
});