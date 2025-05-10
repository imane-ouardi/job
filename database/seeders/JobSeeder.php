<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::firstOrCreate(
            ['id' => 1],
            ['name' => 'Default Category', 'slug' => \Illuminate\Support\Str::slug('Default Category')]
        );
        $company = Company::firstOrCreate(['id' => 6], ['name' => 'Default Company']);

        Job::create([
            'title' => 'developpemt',
            'description' => 'Ut nostrum accusanti',
            'location' => 'FES',
            'salary' => 1222.00,
            'currency' => 'MAD',
            'type' => 'full-time',
            'category_id' => $category->id,
            'company_id' => $company->id,
            'deadline' => '2026-03-24',
            'created_by_email' => Auth::check() ? Auth::user()->email : 'default@example.com',     
        ]);
    }
}
