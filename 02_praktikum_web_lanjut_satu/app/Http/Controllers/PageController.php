<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama : Zaky Muhammad Ibrahim <br> NIM : 2141720131';
    }

    public function articles($id)
    {
        return "Halaman Artikel $id";
    }
}
