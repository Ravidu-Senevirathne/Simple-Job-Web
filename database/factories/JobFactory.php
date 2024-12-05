<?php

namespace Database\Factories;

use App\Models\Employer;
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
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['LKR 50000', 'LKR 90000', 'LKR 150,000']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'url' => fake()->url(),
            'featured' => false
        ];
    }
}
