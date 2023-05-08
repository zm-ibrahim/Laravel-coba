<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    //
    public function show()
    {
        # code...
        $dataDosen = Dosen::all();
        return view('dataDosen', ['datas' => $dataDosen]);
    }
}
