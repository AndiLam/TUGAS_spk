<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


// Arahkan root URL ke halaman login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::get('/dataset', [DashboardController::class, 'dataset'])->name('dataset');
Route::get('/perhitungan', [DashboardController::class, 'perhitungan'])->name('perhitungan');
Route::get('/prediksi', [DashboardController::class, 'prediksi'])->name('prediksi');

Route::post('/prediksi', [DashboardController::class, 'submitPrediksi'])->name('prediksi.submit');

