<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {
    Route::post('backend/logout', [LoginController::class, 'logoutBackend'])->name('backend.logout');
    Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda');
});

Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login');
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])->name('backend.login');
