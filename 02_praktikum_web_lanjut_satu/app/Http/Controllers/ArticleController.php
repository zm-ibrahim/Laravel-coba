<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id)
    {
        return "Halaman Artikel $id";
    }
    public function product()
    {
        return view("product", ['active' => "product"]);
    }

    //     public function category($id)
    //     {
    //         return view("$id", ['active' => "product"]);
    //     }
}
