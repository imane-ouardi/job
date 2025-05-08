<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([
            'name' => 'TechSoft',
            'logo' => 'logos/techsoft.png',
            'location' => 'Casablanca, Morocco',
            'website' => 'https://techsoft.ma',
            'description' => 'TechSoft is a software company that specializes in web and mobile apps.'
        ]);
    }
}
