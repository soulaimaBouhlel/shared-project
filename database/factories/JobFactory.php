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
            'title' => fake()->jobTitle(),
            'location' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(50),
            'requirements' =>$this->faker->text(10),
            'salary' => '$50,000 USD',

        ];
    }
}
