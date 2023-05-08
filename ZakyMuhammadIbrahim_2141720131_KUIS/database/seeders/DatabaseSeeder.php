<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DosenSeeder::class,
        ]);
        Mahasiswa::factory(100)->create();
    }
}
