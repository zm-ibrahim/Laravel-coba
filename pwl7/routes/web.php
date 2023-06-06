<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
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
Route::get('mahasiswa/{mahasiswa}/cetak_pdf', [MahasiswaController::class, 'cetak_khs'])->name('mahasiswas.cetak_khs');
Route::get('articles/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
Route::resource('articles', ArticleController::class);


Route::get('/', function () {
    return view('welcome');
});
