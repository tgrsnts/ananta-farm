<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HewanController;

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
    Route::get('kandang', [HewanController::class, 'index'])->name('admin.kandang.index');
    Route::get('kandang/create', [HewanController::class, 'create'])->name('admin.kandang.create');
    Route::post('kandang', [HewanController::class, 'store'])->name('admin.kandang.store');
    Route::get('kandang/{id}', [HewanController::class, 'destroy'])->name('admin.kandang.destroy');
});

Route::post('/authenticate', [AuthController::class, 'login'])->name('admin.login');
