<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'logo' => 'https://loremflickr.com/120/120/company,logo?random=' . $this->faker->unique()->numberBetween(1, 9999),
            'location' => $this->faker->city,
            'website' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
}

// ... existing code ...
