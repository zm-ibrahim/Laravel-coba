<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        // return "Nama : Zaky Muhammad Ibrahim <br> NIM : 2141720131";
        return view("about", ['active' => "about"]);
    }
}
