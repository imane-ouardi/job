<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\User;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    protected $model = Application::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'job_id' => Job::factory(),
            'full_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'education' => $this->faker->sentence(3),
            'experience' => $this->faker->paragraph,
            'skills' => $this->faker->words(5, true),
            'cv' => 'cv.pdf',
            'extra_file' => null,
            'cover_letter' => $this->faker->paragraph,
            'status' => 'pending',
        ];
    }
}
