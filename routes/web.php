<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\KandangController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekamBobotController;

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

Route::get('/magang', function () {
    return view('magang.index');
});

Route::post('/magang', [PendaftarController::class, 'store'])->name('magang.store');

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    });

    Route::post('/rekam-bobot', [RekamBobotController::class, 'store'])->name('admin.rekam-bobot.store');

    Route::prefix('/hewan')->group(function () {
        Route::get('/', [HewanController::class, 'index'])->name('admin.hewan.index');
        Route::get('/create', [HewanController::class, 'create'])->name('admin.hewan.create');
        Route::post('/', [HewanController::class, 'store'])->name('admin.hewan.store');
        Route::get('/{hewan}', [HewanController::class, 'show'])->name('admin.hewan.show');
        Route::delete('/{id}', [HewanController::class, 'destroy'])->name('admin.hewan.destroy');
    });

    Route::prefix('/kandang')->group(function () {
        Route::get('/', [KandangController::class, 'index'])->name('admin.kandang.index');
        Route::get('/create', [KandangController::class, 'create'])->name('admin.kandang.create');
        Route::post('/', [KandangController::class, 'store'])->name('admin.kandang.store');
        Route::get('/{id}', [KandangController::class, 'destroy'])->name('admin.kandang.destroy');
    });

    Route::prefix('/pendaftar')->group(function () {
        Route::get('/', [PendaftarController::class, 'index'])->name('admin.pendaftar.index');
        Route::get('/create', [PendaftarController::class, 'create'])->name('admin.pendaftar.create');
        Route::post('/', [PendaftarController::class, 'store'])->name('admin.pendaftar.store');
        Route::get('/{id}', [PendaftarController::class, 'destroy'])->name('admin.pendaftar.destroy');
    });

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::get('/create', [ProfileController::class, 'create'])->name('admin.profile.create');
        Route::post('/', [ProfileController::class, 'store'])->name('admin.profile.store');
        Route::get('/{id}', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
    });
})->middleware(['auth', 'admin']);

Route::post('/authenticate', [AuthController::class, 'login'])->name('admin.login');
