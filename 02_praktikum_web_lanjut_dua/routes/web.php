<?php

use App\Http\Controllers\ContactUsController;
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

Route::get('/', function () {
    // return view('home');
    return view("auth/login");
});

Route::get('/profile/{pr}', function ($pr) {
    return view("profile", ['nama' => $pr]);
});

Route::get('/profile', function () {
    return view('profile', ['nama' => 'Zaky Muhammad Ibrahim']);
});

Route::get('/more', function () {
    return view('more');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Praktikum 1
Route::get('/home', function () {
    return view("coba/home");
});

Route::get('/about-us', function () {
    return view("coba/about-us");
});

Route::get('/contact-us', function () {
    return view("coba/contact-us");
});

Route::prefix('product')->group(function () {
    Route::get('/satu', function () {
        return view("coba/produk-1");
    });
    Route::get('/dua', function () {
        return view("coba/produk-2");
    });
});

Route::prefix('program')->group(function () {
    Route::get('/satu', function () {
        return view("coba/program-1");
    });
    Route::get('/dua', function () {
        return view("coba/program-2");
    });
});

Route::get('/news/{judul}', function ($judul) {
    return view("coba/news", ['judul' => $judul]);
});

Route::resource('/contact-us', ContactUsController::class)->only(['index']);
