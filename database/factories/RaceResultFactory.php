<?php

namespace Database\Factories;

use App\Models\Race;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RaceResult>
 */
class RaceResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totalMilliseconds = rand(60000, 120000);

        $minutes = floor($totalMilliseconds / (60 * 1000));
        $seconds = floor(($totalMilliseconds - $minutes * 60 * 1000) / 1000);
        $milliseconds = $totalMilliseconds - ($minutes * 60 * 1000) - ($seconds * 1000);
        return [
            'user_id'=> User::all()->random()->id,
            'race_id'=> Race::all()->random()->id,
            'laptime' => sprintf('%02d:%02d:%03d', $minutes, $seconds, $milliseconds),
            'laptime_in_ms'=> $totalMilliseconds
        ];
    }
}
