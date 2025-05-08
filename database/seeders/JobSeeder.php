<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        Job::create([
            'title' => 'Vero ex voluptas aliquid aut iste laborum voluptatem facere labore voluptate neque ad autem et',
            'description' => 'Ut nostrum accusanti',
            'location' => 'Velit accusantium fugit quisquam accusamus autem eum irure minim',
            'salary' => '1222',
            'type' => 'full-time',
            'category_id' => 1,
            'company_id' => 6,
            'deadline' => '1998-03-24',
            'created_by_email' => Auth::check() ? Auth::user()->email : 'default@example.com',     
        ]);
        
        
    }
}
