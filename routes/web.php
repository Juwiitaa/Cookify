<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [dashboardController::class, 'home'])->name('home')->middleware('auth');
Route::get('/register', [UserController::class, 'lihatRegister'])->name('register');
Route::get('/login', [UserController::class, 'lihatLogin'])->name('login');
Route::post('/register', [userController::class, 'register'])->name('register.simpan');
Route::post('/login/simpan', [userController::class, 'login'])->name('login.simpan');
Route::post('/logout', [userController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/koleksi', [dashboardController::class, 'koleksi'])->middleware('auth')->name('koleksi');
Route::get('/reels', [dashboardController::class, 'reels'])->middleware('auth')->name('reels');
Route::get('/jelajahiresep', [dashboardController::class, 'resep'])->middleware('auth')->name('resep');