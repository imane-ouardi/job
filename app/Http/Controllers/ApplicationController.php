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
        $application->user_id = Auth::id(); // Use Auth facade to get user id
        // Fill other required fields from $request
        // Example: $application->job_id = $request->job_id;
        $application->save();

        // Redirect or return success message
        return redirect()->back()->with('success', 'Application submitted successfully');
    }

    public function create($jobId)
    {
        return view('pages.application', ['jobId' => $jobId]);
    }
}