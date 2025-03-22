<?php

use App\Http\Controllers\HewanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/staycation', function () {
    return view('staycation.index');
});

Route::prefix('/admin')->group(function() {
    Route::get('kandang', [HewanController::class, 'index'])->name('admin.kandang.index');
    Route::get('kandang/create', [HewanController::class, 'create'])->name('admin.kandang.create');
    Route::post('kandang', [HewanController::class, 'store'])->name('admin.kandang.store');
});