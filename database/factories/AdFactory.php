<?php

namespace Database\Factories;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => substr(fake()->word(), 0, -1),
            'content' => substr(fake()->paragraph(), 0, -1),
            'price' => fake()->randomFloat(2, 50, 10000),
            'image' => fake()->imageUrl(),
            'type' => fake()->randomElement(['free', 'paid']),
            'status' => fake()->randomElement(['draft', 'active', 'expired', 'sold', 'private']),
            'user_id' => rand(1, 20),
            'category_id' => rand(1, 3)

        ];
    }
}
