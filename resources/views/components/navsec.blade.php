{{-- @extends('layouts.app') --}}

<div class="absolute top-0 left-0 z-40 w-full bg-blue-900">
    <div class="container mx-auto flex items-center justify-between px-4 py-4">
        <!-- Logo -->
        <div class="w-48">
            <a href="{{ route('home') }}" class="block">
                <img src="/assets/images/logo/logo1.svg" alt="logo" class="h-12 w-auto" />
            </a>
        </div>

        <!-- Navigation -->
        <nav class="hidden lg:flex items-center space-x-8">
            <a href="/" class="text-white font-medium hover:opacity-70">Home</a>
            <a href="/jobs" class="text-white font-medium hover:opacity-70">Find job</a>
            <a href="/about" class="text-white font-medium hover:opacity-70">About</a>
            <a href="/contact" class="text-white font-medium hover:opacity-70">Contact</a>
        </nav>

        <!-- Auth Buttons -->
        <div class="flex items-center justify-end pr-16 lg:pr-20">

            @if (!auth()->check())
                <div class="hidden sm:flex">
                    <a href="{{ route('signin') }}"
                        class="loginBtn px-[22px] py-2 text-base font-medium text-white hover:opacity-70">
                        Sign In
                    </a>
                    <a href="{{ route('signup') }}"
                        class="px-6 py-2 text-base font-medium text-white duration-300 ease-in-out rounded-md bg-white/20 signUpBtn hover:bg-white/100 hover:text-dark">
                        Sign Up
                    </a>
                </div>
            @else
            <a href="{{ filament()->getPanel(auth()->user()?->role)?->getUrl() }}"
                class="loginBtn px-[22px] py-2 text-base font-medium text-white hover:opacity-70">
                 Profile
             </a>
             
            @endif
        </div>

        <!-- Mobile Toggler -->
        <input type="checkbox" id="navbarToggler" class="hidden" />
        <label for="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
        </label>

        <!-- Dropdown Menu for Mobile -->
        <div class="lg:hidden absolute right-4 top-16 w-1/2 bg-white p-4   shadow-lg rounded-lg transition-all duration-300 ease-in-out opacity-0 invisible" id="mobileMenu">
            <a href="/" class="block text-dark py-2 font-medium hover:text-blue-600">Home</a>
            <a href="/jobs" class="block text-dark py-2 font-medium hover:text-blue-600">Find job</a>
            <a href="/about" class="block text-dark py-2 font-medium hover:text-blue-600">About</a>
            <a href="/contact" class="block text-dark py-2 font-medium hover:text-blue-600">Contact</a>
        </div>
    </div>
</div>

<style>
    /* Show dropdown menu when checkbox is checked */
    #navbarToggler:checked ~ #mobileMenu {
        opacity: 1;
        visibility: visible;
    }
</style>
