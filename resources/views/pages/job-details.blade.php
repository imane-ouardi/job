@extends('layouts.app')
@section('content')
<!-- ====== Hero Section Start ====== -->
<section class="relative w-full min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-blue-700 via-blue-900 to-blue-700 bg-cover">
    <div class="absolute inset-0 bg-blue-900/80"></div>
    <div class="container relative z-10 mx-auto px-4 py-24 flex flex-col items-center text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
            Job Details
        </h1>
        <span class="text-lg text-blue-100">{{$job->company?->name }}</span>
    </div>
</section>
<!-- ====== Hero Section End ====== -->

<section class="bg-slate-50 px-20 md:py-24 py-16">
    <div class="container mt-10">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <!-- Sidebar: Company Info -->
            <div class="lg:col-span-4 md:col-span-6">
                <div class="p-8 shadow-lg rounded-xl bg-white top-20 flex flex-col items-center">
                    <img class="rounded-full size-32 p-2 bg-white shadow-md border-4 border-blue-100" alt="logo"
                         src="{{$job->company?->logo ? asset('storage/' .$job->company?->logo) : '/assets/default-logo.png' }}">
                    <h3 class="text-2xl font-bold mt-4 text-blue-900 ">{{$job->company?->name }}</h3>
                    <span class="text-slate-500 mt-2">{{$job->company?->location ?? 'Not specified' }}</span>
                    <div class="mt-4 text-center">

                        <p class="text-slate-400">{{$job->company?->description }}</p>
                        @if($job->company?->website)
                            <a href="{{$job->company?->website }}" target="_blank" class="block mt-2 text-blue-600 hover:underline">Website</a>
                        @endif
                    </div>
                    <div class="mt-6 w-full">
                        <ul class="text-sm text-slate-600  space-y-2">
                            <li><strong>Founder:</strong> {{$job->company?->founder ?? 'Not available' }}</li>
                            <li><strong>Founded:</strong> {{$job->company?->founded ?? 'Not available' }}</li>
                            <li><strong>Employees:</strong> {{$job->company?->employees ?? 'Not available' }}</li>
                            <li><strong>Email:</strong> <a href="mailto:{{$job->company?->email }}" class="text-blue-600 hover:underline">{{$job->company?->email ?? 'Not available' }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Main Content: Job Info -->
            <div class="lg:col-span-8 md:col-span-6 ">
                <div class="bg-white  rounded-xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-blue-900  mb-4">{{ $job->title }}</h2>
                    <div class="flex flex-wrap gap-4 mb-6">
                        <span class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-700 rounded-full font-semibold">
                            <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            {{ $job->created_at->diffForHumans() }}
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-emerald-100 text-emerald-700 rounded-full font-semibold">
                            <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                            {{ $job->type }}
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-slate-100 text-slate-700 rounded-full font-semibold">
                            <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            {{ $job->location }}
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full font-semibold">
                            <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                            {{ $job->salary ? $job->salary . ' ' . $job->currency : 'Not specified' }}
                        </span>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Job Description:</h4>
                    <p class="text-slate-600  mb-6">{{ $job->description }}</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h5 class="font-bold mb-2">Required Qualifications:</h5>
                            <ul class="list-disc list-inside text-slate-600 ">
                                <li>Relevant degree</li>
                                <li>Previous experience in the field</li>
                                <li>Excellent communication skills</li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="font-bold mb-2">Benefits:</h5>
                            <ul class="list-disc list-inside text-slate-600 ">
                                <li>Motivating work environment</li>
                                <li>Competitive salaries</li>
                                <li>Health insurance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8">  
                        <a href="{{ auth()->check() ? route('applications.create', $job->id) :url("/employee/login") }}" class="inline-block px-8 py-3 bg-blue-700 text-white font-bold rounded-lg shadow hover:bg-blue-800 transition">                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection