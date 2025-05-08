<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $jobs = Job::with('company')->latest()->take(6)->get();
        return view('pages.home', compact('jobs'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }
    public function signup()
    {
        return view('pages.signup');
    }

    public function signin()
    {
        return view('pages.signin');
    }
}
