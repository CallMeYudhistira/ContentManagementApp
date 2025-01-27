<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image = fake()->sentence(1);
        return [
            'title' => fake()->sentence(1),
            'description' => fake()->sentence(5),
            'image' => $image . 'jpg',
            'id_users' => fake()->randomElement([1,2,3,4,5]),
            'id_category' => fake()->randomElement([1,2,3,4,5]),
        ];
    }
}
