<?php

use App\Http\Controllers\anggotaController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\pengembalianController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\storeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//route untuk login
Route::get('/', [dashboardController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [dashboardController::class, 'cek_login']);
Route::get('/login', [dashboardController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [dashboardController::class, 'cek_login']);
Route::get('/logout', [dashboardController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/store', [storeController::class, 'index'])->middleware('guest');
Route::post('/registrasi-simpan', [storeController::class, 'registrasi'])->middleware('guest');
Route::post('/login-simpan', [storeController::class, 'login']);
Route::get('/hal_logout', [storeController::class, 'hal_logout'])->middleware('auth:anggota');

/////Untuk Admin & Petugas
Route::get('/home', [dashboardController::class, 'index'])->middleware('auth');

Route::get('/petugas', [petugasController::class, 'index'])->middleware('auth');
Route::get('/tmbh_petugas', [petugasController::class, 'tmbh_petugas'])->middleware('auth');
Route::post('/petugas-simpan', [petugasController::class, 'store'])->middleware('auth');
Route::get('/edit_petugas/{id}', [petugasController::class, 'edit'])->middleware('auth');
Route::put('/petugas/{id}', [petugasController::class, 'update'])->middleware('auth');
Route::get('/detail_petugas/{id}', [petugasController::class, 'detail'])->middleware('auth');
Route::delete('/delete_petugas/{id}', [petugasController::class, 'destroy'])->middleware('auth');

Route::get('/pustaka', [bukuController::class, 'index'])->middleware('auth');
Route::get('/tmbh_pustaka', [bukuController::class, 'tmbh_pustaka'])->middleware('auth');
Route::post('/pustaka-simpan', [bukuController::class, 'store'])->middleware('auth');
Route::get('/edit_pustaka/{id}', [bukuController::class, 'edit'])->middleware('auth');
Route::put('/pustaka/{id}', [bukuController::class, 'update'])->middleware('auth');
Route::get('/detail_pustaka/{id}', [bukuController::class, 'detail'])->middleware('auth');
Route::delete('/delete_pustaka/{id}', [bukuController::class, 'destroy'])->middleware('auth');

Route::get('/kategori', [kategoriController::class, 'index'])->middleware('auth');
Route::get('/tmbh_kategori', [kategoriController::class, 'tmbh_kategori'])->middleware('auth');
Route::post('/kategori-simpan', [kategoriController::class, 'store'])->middleware('auth');
Route::get('/edit_kategori/{id}', [kategoriController::class, 'edit'])->middleware('auth');
Route::put('/kategori/{id}', [kategoriController::class, 'update'])->middleware('auth');
Route::delete('/delete_kategori/{id}', [kategoriController::class, 'destroy'])->middleware('auth');
Route::get('/detail_kategori/{id}', [kategoriController::class, 'detail'])->middleware('auth');

Route::get('/anggota', [anggotaController::class, 'index'])->middleware('auth');
Route::get('/detail_anggota/{id}', [anggotaController::class, 'detail'])->middleware('auth');
Route::delete('/delete_anggota/{id}', [anggotaController::class, 'destroy'])->middleware('auth');

Route::get('/pengembalian', [pengembalianController::class, 'index'])->middleware('auth');
Route::get('/tmbh_pengembalian', [pengembalianController::class, 'show'])->middleware('auth');
Route::post('/pengembalian-simpan', [pengembalianController::class, 'store'])->middleware('auth');
Route::get('/hapus-pengembalian', [pengembalianController::class, 'hapus'])->middleware('auth');
Route::get('/ajukan_pengembalian/{id}', [pengembalianController::class, 'ajukan'])->middleware('auth');


Route::get('/laporan', [laporanController::class, 'index'])->middleware('auth');
Route::get('/modal_laporan', [laporanController::class, 'show'])->middleware('auth');
Route::post('/simpan_laporan', [laporanController::class, 'store'])->middleware('auth');
Route::get('/detail_laporan/{id}', [laporanController::class, 'detail'])->middleware('auth');
Route::get('/delete_laporan', [laporanController::class, 'destroy'])->middleware('auth');

///// Untuk Customer

Route::get('/hal_utama', [storeController::class, 'utama'])->middleware('auth:anggota');
Route::get('/hal_koleksi', [storeController::class, 'koleksi'])->middleware('auth:anggota');
Route::get('/hal_keranjang', [storeController::class, 'keranjang'])->middleware('auth:anggota');
Route::get('/hal_riwayat', [storeController::class, 'riwayat'])->middleware('auth:anggota');
Route::get('/hal_detail/{id}', [storeController::class, 'detail'])->middleware('auth:anggota');
Route::get('/detail_koleksi/{id}', [storeController::class, 'detail_koleksi'])->middleware('auth:anggota');
Route::get('/detail_riwayat/{id}', [storeController::class, 'detail_riwayat'])->middleware('auth:anggota');
Route::get('/hal_profil', [storeController::class, 'profil'])->middleware('auth:anggota');
Route::get('/edit_profil/{id}', [storeController::class, 'edit'])->middleware('auth:anggota');
Route::put('/anggota/{id}', [storeController::class, 'update'])->middleware('auth:anggota');
Route::get('/koleksi/{id}', [storeController::class, 'tmbh_koleksi'])->middleware('auth:anggota');
Route::get('/pinjam/{id}', [storeController::class, 'tmbh_pinjam'])->middleware('auth:anggota');
Route::get('/simpan-pinjam/{id}', [storeController::class, 'simpan_pinjam'])->middleware('auth:anggota');
Route::delete('/delete_koleksi/{id}', [storeController::class, 'destroy'])->middleware('auth:anggota');
Route::delete('/delete_keranjang/{id}', [storeController::class, 'delete_keranjang'])->middleware('auth:anggota');
Route::get('/tmbh_ulasan/{id}', [storeController::class, 'tmbh_ulasan'])->middleware('auth:anggota');
Route::post('/simpan-ulasan/{id}', [storeController::class, 'simpan_ulasan'])->middleware('auth:anggota');
Route::get('/hal_ulasan/{id}', [storeController::class, 'ulasan'])->middleware('auth:anggota');
Route::get('/struk_riwayat/{id}', [storeController::class, 'struk'])->middleware('auth:anggota');
