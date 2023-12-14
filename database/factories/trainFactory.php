<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\train>
 */
class trainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "jurusan" => $this->faker->text(),
            "kode_kereta" => $this->faker->text(),
            "jam_berangkat" => $this->faker->text(),
            "jam_tiba" => $this->faker->text(),
            "tgl_berangkat" => $this->faker->text(),
        ];
    }
}
