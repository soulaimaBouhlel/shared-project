<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'location' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'requirements' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'salary' => $this->faker->randomNumber(),

        ];
    }
}
