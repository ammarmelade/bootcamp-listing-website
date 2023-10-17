<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BootcampFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'user_id' => User::factory(),
            'slug' => fake()->slug(),
            'category_id' => Category::factory(),
            'overview' => fake()->sentence(),
            'fee' => fake()->number(),
            'total_joined' => fake()->number(),
            'description' => fake()->sentence()
        ];
    }
}
