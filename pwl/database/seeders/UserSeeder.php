<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ucok Alakium',
            'email' => 'ucok@gmail.com',
            'student_id' => '2141720134',
            'grade_id' => 5,
            'department_id' => 1,
            'college_exp' =>
            "I dont know what to share about my college experience.
                But one thing i know that i had a lot of experience since i entered
                this college, and its great. I've learned a lot",
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Tesssss',
            'email' => 'tes@gmail.com',
            'student_id' => '1234718271',
            'grade_id' => 1,
            'department_id' => 2,
            'college_exp' =>
            "I dont know what to share about my college experience.
                But one thing i know that i had a lot of experience since i entered
                this college, and its great. I've learned a lot",
            'password' => bcrypt('password')
        ]);

        User::factory(50)->create();
    }
}
