<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranControl;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ReservasiController;


Route::get('/', function () {
    return view('welcome');
});

// ------------------ PROFILE ------------------ //
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ------------------ DASHBOARD REDIRECT ------------------ //
Route::middleware(['auth'])->get('/dashboard', function () {
    $role = Auth::user()->role;
    return redirect()->route($role . '.index');
})->name('dashboard');

// ------------------ ADMIN ------------------ //
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('lapangan', LapanganController::class);
    Route::resource('user', AdminUserController::class);
    Route::resource('reservasi', ReservasiController::class);
    Route::resource('pembayaran', PembayaranControl::class);
    Route::delete('/user/reservasi/{id}', [AdminUserController::class, 'destroy'])->name('user.reservasi.destroy');

});

// ------------------ PETUGAS ------------------ //
Route::middleware(['auth', 'petugas'])->prefix('petugas')->name('petugas.')->group(function () {
    Route::get('/', [PetugasController::class, 'index'])->name('index');

    Route::get('/lapangan', [PetugasController::class, 'index'])->name('lapangan.index');

    Route::get('/reservasi', [PetugasController::class, 'indexReservasi'])->name('reservasi.index');
    Route::put('/reservasi/verifikasi/{id}', [PetugasController::class, 'verifikasiReservasi'])->name('reservasi.verifikasi');

    Route::get('/pembayaran', [PetugasController::class, 'indexPembayaran'])->name('pembayaran.index');
    Route::put('/pembayaran/update/{id}', [PetugasController::class, 'updatePembayaran'])->name('pembayaran.update');
});


// ------------------ USER ------------------ //
Route::middleware(['auth', 'user'])->prefix('user')->name('user.')->group(function () {
   Route::get('/', [UserController::class, 'index'])->name('index');

    Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan.index');

    Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');
    Route::get('/reservasi/create', [ReservasiController::class, 'create'])->name('reservasi.create');
    Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');

    Route::get('/pembayaran', [PembayaranControl::class, 'index'])->name('pembayaran.index');
});
require __DIR__.'/auth.php';
