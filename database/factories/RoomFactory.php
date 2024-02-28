<?php

namespace Database\Factories;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nb_room' => fake()->numberBetween(1, 10),
            'nb_clients_max' => fake()->numberBetween(25, 50),
            'place_id' => Place::factory(),
        ];
    }
}
