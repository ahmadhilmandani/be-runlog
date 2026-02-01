<?php

use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

// ======== START AUTH =========
// login
Route::get('/login', [LogController::class, 'index'])->name('login');

Route::post('/login', [LogController::class, 'store']);

Route::delete('/logout', [LogController::class, 'destroy']);

// ======== END AUTH =========

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    // logs
    Route::get('/logs', function () {
        return view('logs.index');
    })->name('logs.index');
    Route::get('/logs/add', function () {
        return view('logs.add');
    })->name('logs.add');

    Route::get('/tags', function () {
        return view('auth.login');
    })->name('tags.index');

    Route::get('/learning-path', function () {
        return view('auth.login');
    })->name('learning-path.index');

    // Route::get('/account', function () {
    //     return view('auth.register');
    // })->name('account.index');
});



Route::get('/', function () {
    return view('welcome');
});