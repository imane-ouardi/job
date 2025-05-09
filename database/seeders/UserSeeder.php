<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'profile_photo' => 'profile_photos/admin.png',
        ]);

        User::create([
            'name' => 'Employer User',
            'email' => 'employer@example.com',
            'password' => Hash::make('password'),
            'role' => 'employer',
            'profile_photo' => 'profile_photos/employer.png',
        ]);

        User::create([
            'name' => 'Employee User',
            'email' => 'employee@example.com',
            'password' => Hash::make('password'),
            'role' => 'employee',
            'profile_photo' => 'profile_photos/employee.png',
        ]);
    }
}
