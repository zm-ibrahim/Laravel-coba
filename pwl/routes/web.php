<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [DashboardController::class, 'login'])->name('login');

// Profile
Route::get('/profile', [DashboardController::class, 'profile']);

// Experience
Route::get('/experience', [DashboardController::class, 'experience']);

// Classmate
Route::get('/classmate', [DashboardController::class, 'classmate']);

// Subject
Route::get('/subject', [DashboardController::class, 'subject']);

Auth::routes();
