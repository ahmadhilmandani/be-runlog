<?php

use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

// ======== START AUTH =========
// login
Route::get('/login', [LogController::class, 'index'])->name('login');

Route::post('/login', [LogController::class, 'store']);

Route::delete('/logout', [LogController::class, 'destroy']);

// ======== END AUTH =========

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/logs', function () {
        return view('logs.index');
    });

    Route::get('/tags', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/learning-path', function () {
        return view('auth.login');
    });

    Route::get('/account', function () {
        return view('auth.register');
    });
});
