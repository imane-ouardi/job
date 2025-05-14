@extends('layouts.app')
@section('content')
    
     <!-- ====== Hero Section Start ====== -->
     <section class="relative w-full min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-blue-700 via-blue-900 to-blue-700 bg-cover">
      <div class="absolute inset-0 bg-blue-900/80"></div>
      <div class="container relative z-10 mx-auto px-4 py-24 flex flex-col items-center text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
          About Us Page
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto mb-8 drop-shadow">
          There are many variations of passages of Lorem Ipsum available.
        </p>
        <ul class="flex items-center justify-center gap-[10px]">
          <li>
            <a
              href="{{ route('home') }}"
              class="flex items-center gap-[10px] text-base font-medium text-white "
            >
              Home
            </a>
          </li>
          <li>
            <a
              href="javascript:void(0)"
              class="flex items-center gap-[10px] text-base font-medium text-white "
            >
              <span class="text-white "> / </span>
              About us
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!-- ====== Hero Section End ====== -->

    <!-- ====== About Section Start -->
    <x-about/>
    <!-- ====== About Section End -->

@endsection
