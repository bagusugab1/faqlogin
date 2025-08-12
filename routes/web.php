<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BidangController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MasukanController;


// Rute untuk halaman utama
Route::get('/', function () {
    return view('template');
});

// === RUTE OTENTIKASI (LOGIN & LOGOUT) ===
// Rute-rute ini dapat diakses oleh siapa saja (publik).
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// === GRUP RUTE UNTUK PANEL ADMIN ===
// Semua rute di dalam grup ini akan:
// 1. Dilindungi oleh middleware 'auth' (harus login terlebih dahulu).
// 2. Memiliki awalan URL '/admin' (contoh: yourdomain.com/admin/dashboard).
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Rute Dashboard (bisa diakses oleh semua role yang sudah login)
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // --- Grup Rute HANYA untuk SUPER ADMIN ---
    // Rute di dalam grup ini hanya bisa diakses oleh user dengan role 'super_admin'.
    Route::middleware(['role:super_admin'])->group(function () {
        // Route::resource secara otomatis membuat 7 rute untuk operasi CRUD:
        // index, create, store, show, edit, update, destroy.
        Route::resource('users', UserController::class);
        Route::resource('bidang', BidangController::class);
        Route::resource('layanan', LayananController::class);
        Route::resource('faq', FaqController::class);
    });

    // --- Grup Rute HANYA untuk ADMIN BIDANG ---
    // Rute di dalam grup ini hanya bisa diakses oleh user dengan role 'admin_bidang'.
    Route::middleware(['role:admin_bidang'])->prefix('admin')->group(function () {
        // Menggunakan resource akan otomatis membuat rute untuk index, show, destroy, dll.
        Route::resource('masukan', MasukanController::class)->names('admin.masukan');
    });
});
