<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;

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


Route::resource('mahasiswas', MahasiswaController::class);
Route::get('mahasiswa/{mahasiswa}/score', [MahasiswaController::class, 'score'])->name('mahasiswas.score');
Route::resource('articles', ArticleController::class);

Route::get('/', function () {
    return view('welcome');
});
