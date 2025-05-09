<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query()->with('company');

        if ($request->filled('search')) {
            $query->whereHas('company', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('location')) {
            $query->where('location', $request->location);
        }

        if ($request->filled('types')) {
            $query->whereIn('type', (array) $request->types);
        }

        if ($request->filled('salary')) {
      
            $salaryRange = explode('-', $request->salary);
            if (count($salaryRange) === 2) {
                $query->whereBetween('salary', [$salaryRange[0], $salaryRange[1]]);
            } elseif ($request->salary === 'above_25000') { 
                 $query->where('salary', '>', 25000);
            }
        }

        $jobs = $query->latest()->paginate(12);

        $categories = Category::all();
        $locations = Job::select('location')->distinct()->pluck('location');
        $types = Job::select('type')->distinct()->pluck('type');

        return view('pages.jobs', compact('jobs', 'categories', 'locations', 'types'));
    }

    public function show(Job $job)
    {
      
        return view('pages.job-details', compact('job'));
    }
}
