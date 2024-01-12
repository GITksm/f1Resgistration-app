<?php

namespace Database\Factories;

use Database\Seeders\ProfileSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Race>
 */
class RaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'location' => $this->faker->city(),
            'length_circuit' => $this->faker->randomFloat(2, 3, 7), // Random waarde tussen
//            3 en 7 met 2 decimalen
];


    }
}


