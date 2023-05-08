<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'code' => 'SIB',
            'name' => 'Sistem Informasi Bisnis',
            'head' => 'Adi Harto'
        ]);

        Department::create([
            'code' => 'TI',
            'name' => 'Teknik Informatika',
            'head' => 'Rudi Harianto'
        ]);

    }
}
