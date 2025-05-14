@extends('layouts.app')
@section('content')

<section class="relative w-full min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-blue-700 via-blue-900 to-blue-700 bg-cover">
    <div class="absolute inset-0 bg-blue-900/80"></div>
    <div class="container relative z-10 mx-auto px-4 py-24 flex flex-col items-center text-center">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
        Employer Detail
      </h1>
      
    </div>
  </section>
@php
    $jobsCollection = $company->jobs;
    $perPage = 5;
    $currentPage = request()->get('page', 1);
    $pagedData = $jobsCollection->forPage($currentPage, $perPage);
    $jobs = new \Illuminate\Pagination\LengthAwarePaginator(
        $pagedData,
        $jobsCollection->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );
@endphp

<section class="bg-gradient-to-br from-blue-50 to-white py-16 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="bg-white shadow-2xl rounded-3xl p-10 md:p-14 max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row items-center gap-8 mb-8">
                @if($company->logo)
                    <img src="{{ asset('storage/' . $company->logo) }}" alt="Logo" class="w-28 h-28 rounded-2xl object-cover border border-gray-300 shadow-sm">
                @else
                    <div class="w-28 h-28 bg-gray-100 flex items-center justify-center rounded-2xl text-2xl text-gray-400 font-bold">
                        {{ strtoupper(substr($company->name, 0, 2)) }}
                    </div>
                @endif
                <div class="text-center md:text-left">
                    <h1 class="text-4xl font-bold text-gray-800 mb-1">{{ $company->name }}</h1>
                    <p class="text-gray-500 text-sm">{{ $company->location }}</p>
                    @if($company->website)
                        <a href="{{ $company->website }}" target="_blank" class="text-indigo-600 hover:underline text-sm mt-2 inline-block">
                            🌐 {{ $company->website }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="mb-10">
                <h2 class="text-xl font-semibold text-gray-700 mb-3">About the Company</h2>
                <p class="text-gray-600 leading-relaxed text-justify">
                    {{ $company->description }}
                </p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Open Positions</h2>
                @if($jobs->isEmpty())
                    <p class="text-gray-500 italic">No job openings currently.</p>
                @else
                    <div class="space-y-4">
                        @foreach($jobs as $job)
                            <div class="bg-gray-50 hover:bg-gray-100 transition rounded-xl p-5 border border-gray-200 flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">{{ $job->title }}</h3>
                                    @if($job->location)
                                        <p class="text-gray-500 text-sm">{{ $job->location }}</p>
                                    @endif
                                </div>
                                <a href="{{ auth()->check() ? route('applications.create', $job->id) : url("/employee/login")}}"    class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition">
                                Apply Now
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-6">
                        {{ $jobs->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
