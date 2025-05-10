<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class CompanyFactory extends Factory
{
    public function definition(): array
    {
        $imageName = 'logo_' . $this->faker->unique()->numberBetween(1, 9999) . '.jpg';
        $imageUrl = 'https://loremflickr.com/120/120/company,logo?random=' . $this->faker->unique()->numberBetween(1, 9999);
        $imageContent = file_get_contents($imageUrl);
        Storage::put('public/logos/' . $imageName, $imageContent);

        return [
            'name' => $this->faker->company,
            'logo' => 'logos/' . $imageName,
            'location' => $this->faker->city,
            'website' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
}
