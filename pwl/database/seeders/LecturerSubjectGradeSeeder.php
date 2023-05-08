<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Lecturer;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LecturerSubjectGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $grade = Grade::factory()->count(5)->create([
        //     ['name' => 'TI - 2A'],
        //     ['name' => 'TI - 2B'],
        //     ['name' => 'TI - 2C'],
        //     ['name' => 'TI - 2D'],
        //     ['name' => 'TI - 2E']
        // ]);
        $grades = collect([]);

        // $grade = Grade::factory()->count(3)
        $grades->push(Grade::factory()->create(['name' => 'TI - 2A']));
        $grades->push(Grade::factory()->create(['name' => 'TI - 2B']));
        $grades->push(Grade::factory()->create(['name' => 'TI - 2C']));
        $grades->push(Grade::factory()->create(['name' => 'TI - 2D']));
        $grades->push(Grade::factory()->create(['name' => 'TI - 2E']));

        Subject::factory()
            ->count(10)
            ->has(Lecturer::factory()->count(3))
            ->hasAttached($grades)
            ->create();
    }
}
