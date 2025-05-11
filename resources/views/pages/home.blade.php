@extends('layouts.app')

@section('content')
<!-- ====== Navbar Section Start -->
    <x-navbar/>

    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <x-hero/>

    <!-- ====== Hero Section End -->


    <!-- ====== Features Section Start -->


    <x-features  />
    <!-- ====== Features Section End -->

<section id="Jobs" class="relative bg-slate-50  md:py-24 py-16">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold text-blue-600 ">
                Popular Jobs</h3>
            <p class="text-sla max-w-xl mx-auto">
                Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on
                over 30000+ companies worldwide.</p>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            @foreach($jobs as $job)
                <div class="group shadow-sm shadow-gray-200  p-6 rounded-md bg-white ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="size-14 flex items-center justify-center bg-white  shadow-sm shadow-gray-200  rounded-md">
                                <img class="size-8" alt="" src="{{ asset('storage/' . $job->company->logo) }}">
                            </div>
                            <div class="ms-3">
                                <a class="block text-[16px] font-semibold hover:text-blue-900 transition-all duration-500"
                                    href="{{ route('employer.detail', $job->company->id) }}">
                                    {{ $job->company->name }}
                                </a>
                                <span class="block text-sm text-slate-400">
                                    {{ $job->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                        <span class="bg-blue-600/10 group-hover:bg-blue-600 inline-block text-blue-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">
                            {{ $job->type }}
                        </span>
                    </div>
                    <div class="mt-6">
                        <a class="text-lg hover:text-blue-600 font-semibold transition-all duration-500"
                            href="{{ route('jobs.show', $job->id) }}">
                            {{ $job->title }}
                        </a>
                        <h6 class="text-base font-medium flex items-center">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                stroke-linecap="round" stroke-linejoin="round" class="me-1" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            {{ $job->location }}
                        </h6>
                    </div>
                    <div class="mt-6">
                        <div class="w-full bg-gray-100  rounded-full h-[6px]">
                            <div class="bg-blue-600 h-[6px] rounded-full" style="width: 55%;"></div>
                        </div>
                        <div class="mt-2">
                            <span class="text-slate-400 text-sm">
                                <span class="text-slate-900  font-semibold inline-block">
                                    {{ $job->applications_count ?? 0 }} applied</span>
                                of {{ $job->vacancy ?? 'N/A' }} vacancy</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <a class="inline-flex items-center font-semibold tracking-wide border align-middle transition text-base text-center relative border-none after:content-[''] after:absolute after:h-px after:w-0 after:end-0 after:bottom-0 after:start-0 after:transition-all after:duration-500 hover:after:w-full hover:after:end-auto text-slate-400 hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out"
                    href="{{ route('jobs.index')}}" data-discover="true">
                    See More Jobs <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                        viewBox="0 0 24 24" class="ms-1 align-middle" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path d="m12 4-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- ====== About Section Start -->

    <x-about/>
    <!-- ====== About Section End -->


    <!-- ====== Testimonial Section Start -->

    <x-Testimonials/>

    <!-- ====== Testimonial Section End -->



    <!-- ====== Contact Start ====== -->
    <x-contact/>

    <!-- ====== Contact End ====== -->

   
    <!-- ====== Footer Section Start -->
    <x-footer/>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a 
      id="backToTop"
      href="javascript:void(0)"
      class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

   

    <!-- ====== All Scripts -->

<script>
  // Show/hide the button on scroll
  window.addEventListener('scroll', function() {
    var btn = document.getElementById('backToTop');
    if(window.scrollY > 200) {
      btn.classList.remove('hidden');
      btn.classList.add('flex');
    } else {
      btn.classList.remove('flex');
      btn.classList.add('hidden');
    }
  });

  // Scroll to top on click
  document.getElementById('backToTop').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
</script>

@endsection
