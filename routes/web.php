<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\KandangController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekamBobotController;
use App\Http\Controllers\RekamPenyakitController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
})->middleware('login');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/katalog',
    [KatalogController::class, 'index']
);

Route::get('/staycation', function () {
    return view('staycation.index');
});

Route::get('/magang', function () {
    return view('magang.index');
});

Route::post('/magang', [PendaftarController::class, 'store'])->name('magang.store');

Route::middleware('admin')->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::middleware('superadmin')->group(function () {
            Route::prefix('/katalog')->group(function () {
                Route::get('/', [KatalogController::class, 'index_admin'])->name('admin.katalog.index');
                Route::get('/create', [KatalogController::class, 'create'])->name('admin.katalog.create');
                Route::post('/', [KatalogController::class, 'store'])->name('admin.katalog.store');
                Route::post('/{id}', [KatalogController::class, 'update'])->name('admin.katalog.update');
                Route::get('/{katalog}', [KatalogController::class, 'show'])->name('admin.katalog.show');
                Route::delete('/{id}', [KatalogController::class, 'destroy'])->name('admin.katalog.destroy');
            });

            Route::prefix('/pendaftar')->group(function () {
                Route::get('/', [PendaftarController::class, 'index'])->name('admin.pendaftar.index');
                Route::get('/create', [PendaftarController::class, 'create'])->name('admin.pendaftar.create');
                Route::post('/update/{id}', [PendaftarController::class, 'updateStatus'])->name('admin.pendaftar.status');
                Route::post('/', [PendaftarController::class, 'store'])->name('admin.pendaftar.store');
                Route::get('/{pendaftar}', [PendaftarController::class, 'show'])->name('admin.pendaftar.show');
                Route::delete('/{id}', [PendaftarController::class, 'destroy'])->name('admin.pendaftar.destroy');
            });
        });
        Route::get('/', [DashboardController::class, 'index'])->middleware('admin');

        Route::post('/rekam-bobot', [RekamBobotController::class, 'store'])->name('admin.rekam-bobot.store');
        Route::post('/rekam-bobot-update', [RekamBobotController::class, 'update'])->name('admin.rekam-bobot.update');
        Route::delete('/rekam-bobot/{id}', [RekamBobotController::class, 'destroy'])->name('admin.rekam-bobot.destroy');
        Route::post('/rekam-penyakit', [RekamPenyakitController::class, 'store'])->name('admin.rekam-penyakit.store');
        Route::post('/sembuh/{id}', [RekamPenyakitController::class, 'sembuh'])->name('admin.hewan.sembuh');
        Route::post('/perlakuan', [RekamPenyakitController::class, 'storePerlakuan'])->name('admin.perlakuan');

        Route::prefix('/hewan')->group(function () {
            Route::get('/', [HewanController::class, 'index'])->name('admin.hewan.index');
            Route::post('/', [HewanController::class, 'store'])->name('admin.hewan.store');
            Route::get('/{hewan}', [HewanController::class, 'show'])->name('admin.hewan.show');
            Route::post('/{id}', [HewanController::class, 'update'])->name('admin.hewan.update');
            Route::delete('/{id}', [HewanController::class, 'destroy'])->name('admin.hewan.destroy');
        });

        Route::prefix('/profile')->group(function () {
            Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
            Route::get('/create', [ProfileController::class, 'create'])->name('admin.profile.create');
            Route::post('/', [ProfileController::class, 'store'])->name('admin.profile.store');
            Route::get('/{id}', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
            Route::post('/foto', [ProfileController::class, 'updateFoto'])->name('admin.update.foto');
            Route::post('/update', [ProfileController::class, 'edit'])->name('admin.update.about');
        });

        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});

Route::post('/authenticate', [AuthController::class, 'login'])->name('admin.login');
