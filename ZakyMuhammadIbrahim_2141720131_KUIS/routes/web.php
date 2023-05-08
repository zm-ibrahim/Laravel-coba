<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;

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

Route::get('/', [DashboardController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dataMahasiswa', [MahasiswaController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/dataDosen', [DosenController::class, 'show']);

