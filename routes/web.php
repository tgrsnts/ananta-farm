<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KandangController;

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

Route::prefix('/admin')->group(function() {
    Route::get('kandang', [KandangController::class, 'index'])->name('admin.kandang.index');
    Route::get('kandang/create', [KandangController::class, 'create'])->name('admin.kandang.create');
    Route::post('kandang', [KandangController::class, 'store'])->name('admin.kandang.store');
    Route::get('kandang/{id}', [KandangController::class, 'destroy'])->name('admin.kandang.destroy');
});

Route::post('/authenticate', [AuthController::class, 'login'])->name('admin.login');
