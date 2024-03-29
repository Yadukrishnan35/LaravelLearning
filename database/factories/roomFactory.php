<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\room>
 */
class roomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'room_number' => fake()->unique()->numberBetween(1,30),
            'room_size' => fake()->numberBetween(1,10),
            'price' => fake()->numberBetween(100,600),
            'description' =>fake()->text(1000),
        ];
    }
}
