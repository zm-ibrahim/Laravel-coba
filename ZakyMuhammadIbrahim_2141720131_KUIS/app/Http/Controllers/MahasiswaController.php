<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function show()
    {
        # code...
        $dataM = Mahasiswa::all();
        return view('dataMahasiswa', ['dataMahasiswa' => $dataM]);
    }
    
}
