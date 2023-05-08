<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nim' => fake()->numerify('214172####'),
            'nama' => fake()->name(),
            'kelas' => fake()->regexify('TI-2[A-I]{1}'),
            'email' => fake()->unique()->safeEmail(),
            'experience' => fake()->paragraph(3),
        ];
    }
}
