<?php

use App\Http\Controllers\AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KaprodiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'loginPage'])->name('login');

Route::post('/login', [AuthController::class, 'loginProses'])->name('login.process');

// Route::middleware(['auth', 'level:admin'])->get('/admin/dashboard', fn () => 'Admin Dashboard');
Route::group(['middleware'=> ['auth','level:admin']],function() {
    Route::get('dashboardAdmin',[AdminDashboard::class, 'showAdmin'])->name('adminDashboard');
});

// Route::middleware(['auth', 'level:kaprodi'])->get('/kaprodi/dashboard', fn () => 'Dashboard Kaprodi');

Route::group(['middleware'=> ['auth','level:kaprodi']],function() {
    Route::get('dashboardKaprodi',[KaprodiController::class, 'showKaprodi'])->name('kaprodiDashboard');
});

Route::middleware(['auth', 'level:dosen_pembimbing'])->get('/dosen/dashboard', fn () => 'Dashboard Dosen');

Route::middleware(['auth', 'level:mahasiswa'])->get('/mahasiswa/dashboard', fn () => 'Dashboard Mahasiswa');
