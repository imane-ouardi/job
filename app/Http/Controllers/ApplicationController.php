<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $application = new Application();
        $application->user_id = Auth::id(); 
        $application->job_id = $request->job_id;
        $application->full_name = $request->full_name;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->education = $request->education;
        $application->experience = $request->experience;
        $application->skills = $request->skills;
        $application->cv = $request->cv;
        $application->extra_file = $request->extra_file;
        $application->cover_letter = $request->cover_letter;
       
        $application->save();
    
       
        return redirect()->back()->with('success', 'Application submitted successfully');
    }

    public function create($jobId)
    {
        return view('pages.application', ['jobId' => $jobId]);
    }


}