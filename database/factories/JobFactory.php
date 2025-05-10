<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

class JobFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,        
            'description' => $this->faker->paragraph(3),
            'type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Remote']),
            'location' => $this->faker->city,
            'salary' => $this->faker->randomFloat(2, 1000, 50000),
            'currency' => 'MAD',
            'category_id' => 1,
            'company_id' => 1,
            'deadline' => now()->addDays(rand(10, 60)),
            'created_by_email' => Auth::check() ? Auth::user()->email : 'default@example.com',
        ];

    }
}