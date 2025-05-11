<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\landingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', [landingController::class, 'index']);

Route::get('/home', [dashboardController::class, 'home'])->name('home');
Route::get('/jelajahiResep', [dashboardController::class, 'resep'])->name('resep');
Route::get('/reels', [dashboardController::class, 'reels'])->name('reels');
Route::get('/koleksi', [dashboardController::class, 'koleksi'])->name('koleksi');