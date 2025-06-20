<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\favoritController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'lihatRegister'])->name('register')->middleware('guest');
Route::post('/register', [userController::class, 'register'])->name('register.simpan')->middleware('guest');
Route::get('/login', [UserController::class, 'lihatLogin'])->name('login')->middleware('guest');
Route::post('/login', [userController::class, 'login'])->name('login.simpan')->middleware('guest');
Route::post('/logout', [userController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/home', [dashboardController::class, 'home'])->name('home')->middleware('auth');
Route::get('/koleksi', [dashboardController::class, 'koleksi'])->middleware('auth')->name('koleksi');
Route::get('/jelajahiresep', [dashboardController::class, 'resep'])->middleware('auth')->name('resep');
Route::get('/statistik', [ResepController::class, 'statistik'])->middleware('auth')->name('statistik');

Route::get('/editResep/{id}', [ResepController::class, 'editResep'])->middleware('auth')->name('editResep');
Route::get('/lihatResep', [ResepController::class, 'lihatResep'])->middleware('auth')->name('lihatResep');
Route::get('/tambahResep', [ResepController::class, 'tambahResep'])->middleware('auth')->name('tambahResep');
Route::post('/simpanResep', [ResepController::class, 'simpanResep'])->middleware('auth')->name('simpanResep');
Route::post('/updateResep/{id}', [ResepController::class, 'updateResep'])->middleware('auth')->name('updateResep');
Route::post('/hapusResep/{id}', [ResepController::class, 'hapusResep'])->middleware('auth')->name('hapusResep');
Route::get('/detailResep', [ResepController::class, 'detailResep'])->middleware('auth')->name('detailResep');

Route::get('/editKategori/{id}', [kategoriController::class, 'editKategori'])->middleware('auth')->name('editKategori');
Route::get('/lihatKategori', [kategoriController::class, 'lihatKategori'])->middleware('auth')->name('lihatKategori');
Route::get('/tambahKategori', [kategoriController::class, 'tambahKategori'])->middleware('auth')->name('tambahKategori');
Route::post('/simpanKategori', [kategoriController::class, 'simpanKategori'])->middleware('auth')->name('simpanKategori');
Route::post('/updateKategori/{id}', [KategoriController::class, 'updateKategori'])->middleware('auth')->name('updateKategori');
Route::post('/hapusKategori/{id}', [KategoriController::class, 'hapusKategori'])->middleware('auth')->name('hapusKategori');

Route::post('/resep/{id}/favorit/tambah', [favoritController::class, 'tambah'])->name('favorit.tambah');
Route::post('/resep/{id}/favorit/hapus', [FavoritController::class, 'hapus'])->name('favorit.hapus');

Route::get('/laporan-user-resep', [favoritController::class, 'laporanUserResep'])->name('laporan.user.resep');

Route::get('/detailResep/{id}', [ResepController::class, 'detailResep'])->middleware('auth')->name('detailResep');


Route::post('/hapusPengguna/{id}', [UserController::class, 'hapusPengguna'])->middleware('auth')->name('hapusPengguna');
Route::get('/lihatPengguna', [UserController::class, 'lihatPengguna'])->middleware('auth')->name('lihatPengguna');

