<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KandangController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/staycation', function () {
    return view('staycation.index');
});

Route::prefix('/admin')->group(function () {
    Route::prefix('/kandang')->group(function () {
        Route::get('/', [KandangController::class, 'index'])->name('admin.kandang.index');
        Route::get('/create', [KandangController::class, 'create'])->name('admin.kandang.create');
        Route::post('/', [KandangController::class, 'store'])->name('admin.kandang.store');
        Route::get('/{id}', [KandangController::class, 'destroy'])->name('admin.kandang.destroy');
    });

    Route::prefix('/pendaftar')->group(function () {
        Route::get('/', [PendaftarController::class, 'index'])->name('admin.profile.index');
        Route::get('/create', [PendaftarController::class, 'create'])->name('admin.profile.create');
        Route::post('/', [PendaftarController::class, 'store'])->name('admin.profile.store');
        Route::get('/{id}', [PendaftarController::class, 'destroy'])->name('admin.profile.destroy');
    });

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::get('/create', [ProfileController::class, 'create'])->name('admin.profile.create');
        Route::post('/', [ProfileController::class, 'store'])->name('admin.profile.store');
        Route::get('/{id}', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
    });
});

Route::post('/authenticate', [AuthController::class, 'login'])->name('admin.login');
