<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(Company $company)
    {
        $jobs = $company->jobs()->latest()->take(6)->get();
        $relatedCompanies = Company::where('id', '!=', $company->id)
                                     ->inRandomOrder() 
                                     ->take(4)
                                     ->get();
        return view('pages.employer-detail', compact('company', 'jobs', 'relatedCompanies'));
    }
}
