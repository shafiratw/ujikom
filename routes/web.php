<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;

/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/profil', [FrontController::class, 'profil'])->name('profil');
Route::get('/layanan', [FrontController::class, 'layanan'])->name('layanan');
Route::get('/artikel', [FrontController::class, 'artikel'])->name('artikel.index');
Route::get('/artikel/{id}', [FrontController::class, 'artikelShow'])->name('artikel.show');
Route::get('/galeri', [FrontController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [FrontController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
/*
|--------------------------------------------------------------------------
| LOGIN & LOGOUT
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| AREA ADMIN (wajib login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {

        // Layanan / Produk (dinamis)
        Route::resource('layanan', ProdukController::class)
            ->only(['index', 'store', 'update', 'destroy'])
            ->parameters(['layanan' => 'id']);

        // Artikel (dinamis)
        Route::resource('artikel', ArtikelController::class)
            ->only(['index', 'store', 'update', 'destroy'])
            ->parameters(['artikel' => 'id']);

        // Galeri (dinamis)
        Route::resource('galeri', GaleriController::class)
            ->only(['index', 'store', 'update', 'destroy'])
            ->parameters(['galeri' => 'id']);

        // Profil perusahaan (statis: hanya bisa diedit)
        Route::get('profil', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::put('profil', [ProfilController::class, 'update'])->name('profil.update');

        // Pesan masuk dari halaman Kontak
        Route::get('pesan', [KontakController::class, 'index'])->name('pesan.index');
        Route::delete('pesan/{id}', [KontakController::class, 'destroy'])->name('pesan.destroy');
    });
});