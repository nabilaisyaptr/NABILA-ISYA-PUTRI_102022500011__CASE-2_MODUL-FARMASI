<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ObatController;

Route::middleware(['auth', 'role:admin,petugas'])->group(function () {
    Route::get('/', [ObatController::class, 'daftar'])->name('obat.daftar');
    Route::get('/data', [ObatController::class, 'daftar'])->name('obat.index');
    Route::get('/list', [ObatController::class, 'daftar'])->name('obat.list');

    Route::get('/tambah-obat', [ObatController::class, 'create'])->name('obat.create');
    Route::post('/tambah-obat', [ObatController::class, 'store'])->name('obat.store');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/tes-koneksi', function () {
    try {
        DB::connection()->getPdo();
        return "DB berhasil connect";
    } catch (\Exception $e) {
        return "DB gagal connect: " . $e->getMessage();
    }
})->withoutMiddleware("web");