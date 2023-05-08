<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class DashboardController extends Controller
{
    //
    public function show()
    {
        # code...
        $count = Mahasiswa::all()->count();
        $countDos = Dosen::all()->count();
        return view('dashboard', ['jumlah' => $count, 'jumlahDos' => $countDos]);
    }
}
