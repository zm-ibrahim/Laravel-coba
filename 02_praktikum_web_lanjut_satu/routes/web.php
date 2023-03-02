<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
Route::get('/product', [ArticleController::class, 'product']);
Route::prefix('product')->group(function () {
    Route::get('/makanan', function () {
        return view("makanan", ['active' => "product"]);
    });
    Route::get('/minuman', function () {
        return view("minuman", ['active' => "product"]);
    });
});

// Tugas Jobsheet (Routing Web)

Route::get('/index', function () {
    return view("eduka/home");
});

Route::get('/about-us', function () {
    return view("eduka/about-us");
});

Route::get('/contact-us', function () {
    return view("eduka/contact-us");
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return view("eduka/category");
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return view("eduka/category-2");
    });
    Route::get('/riri-story-books', function () {
        return view("eduka/category-3");
    });
    Route::get('/kolak-kids-songs', function () {
        return view("eduka/category-4");
    });
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return view("eduka/program");
    });
    Route::get('/magang', function () {
        return view("eduka/program-2");
    });
    Route::get('/kunjungan-industri', function () {
        return view("eduka/program-3");
    });
});

Route::get('/news/', function () {
    return view("eduka/news");
});

Route::get('/news/{id}', function ($id) {
    return view("eduka/news/$id");
});
