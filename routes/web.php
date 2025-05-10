<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\landingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', [landingController::class, 'index']);

Route::get('/home', [dashboardController::class, 'home'])->name('home');