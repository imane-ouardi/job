@extends('layouts.app')
@section('content')
  <!-- ====== Hero Section Start ====== -->
    <section class="relative w-full min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-blue-700 via-blue-900 to-blue-700 bg-cover">
      <div class="absolute inset-0 bg-blue-900/80"></div>
      <div class="container relative z-10 mx-auto px-4 py-24 flex flex-col items-center text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
          Contact page
        </h1>
        
      </div>
    </section>
    <!-- ====== Hero Section End ====== -->
    <section id="contact" class="py-24 bg-gradient-to-br from-blue-50 via-white to-blue-100">
      <div class="container mx-auto px-4 ">
        <div class="flex flex-col lg:flex-row flex-wrap items-center gap-16">
          <div class="w-full lg:w-1/2 bg-white rounded-2xl shadow-2xl p-10 md:p-14 flex flex-col justify-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 text-center">
              Get in Touch
            </h2>
            <p class="text-blue-800 mb-8 text-center">
              Fill out the form and our team will get back to you within 24 hours.
            </p>
              <livewire:contact-form />
              @livewireScripts


          </div>
          <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
            <div class="mb-10">
              <h3 class="text-2xl font-bold text-blue-900 mb-4">Contact Information</h3>
              <p class="text-blue-800 mb-6">We are here to help and answer any question you might have.</p>
              <div class="flex flex-col gap-6">
                <div class="flex items-center gap-4">
                  <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7.5"/><path d="M21 10.5l-9 5.25L3 10.5"/></svg>
                  </div>
                  <div>
                    <h5 class="font-semibold text-blue-900">Email</h5>
                    <a href="mailto:info@yourdomain.com" class="text-blue-700 hover:underline">info@yourdomain.com</a>
                  </div>
                </div>
                <div class="flex items-center gap-4">
                  <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92V19a2 2 0 0 1-2 2A19.72 19.72 0 0 1 3 5a2 2 0 0 1 2-2h2.09a2 2 0 0 1 2 1.72c.13.81.36 1.6.7 2.34a2 2 0 0 1-.45 2.11l-.7.7a16 16 0 0 0 6.29 6.29l.7-.7a2 2 0 0 1 2.11-.45c.74.34 1.53.57 2.34.7A2 2 0 0 1 22 16.92z"/></svg>
                  </div>
                  <div>
                    <h5 class="font-semibold text-blue-900">Phone</h5>
                    <a href="tel:+1234567890" class="text-blue-700 hover:underline">+1 234 567 890</a>
                  </div>
                </div>
                <div class="flex items-center gap-4">
                  <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 12.414a4 4 0 1 0-1.414 1.414l4.243 4.243a1 1 0 0 0 1.414-1.414z"/><circle cx="11" cy="11" r="8"/></svg>
                  </div>
                  <div>
                    <h5 class="font-semibold text-blue-900">Address</h5>
                    <span class="text-blue-700">123 Main St, City, Country</span>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h4 class="text-lg font-semibold text-blue-900 mb-2">Follow us</h4>
              <div class="flex gap-4 justify-center lg:justify-start">
                <a href="#" class="text-blue-600 hover:text-blue-800" aria-label="Facebook">
                  <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M17 2.1C17 1.5 16.5 1 15.9 1H8.1C7.5 1 7 1.5 7 2.1V21.9C7 22.5 7.5 23 8.1 23H15.9C16.5 23 17 22.5 17 21.9V2.1ZM15 8H13V6C13 5.4 12.6 5 12 5S11 5.4 11 6V8H9C8.4 8 8 8.4 8 9S8.4 10 9 10H11V18C11 18.6 11.4 19 12 19S13 18.6 13 18V10H15C15.6 10 16 9.6 16 9S15.6 8 15 8Z"/></svg>
                </a>
                <a href="#" class="text-blue-600 hover:text-blue-800" aria-label="Twitter">
                  <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M22 5.9c-.8.4-1.6.7-2.5.8.9-.5 1.6-1.4 2-2.3-.8.5-1.7.9-2.6 1.1C17.2 4.6 16.1 4 15 4c-2.2 0-4 1.8-4 4 0 .3 0 .6.1.9C7.1 8.7 4.1 7.1 2.1 4.7c-.3.5-.5 1.1-.5 1.7 0 1.2.6 2.3 1.6 2.9-.6 0-1.1-.2-1.6-.4v.1c0 1.7 1.2 3.1 2.8 3.4-.3.1-.6.2-.9.2-.2 0-.4 0-.6-.1.4 1.3 1.6 2.2 3 2.2-1.1.9-2.5 1.4-4 1.4-.3 0-.6 0-.9-.1C2.7 19.1 5.9 20 9.3 20c7.5 0 11.6-6.2 11.6-11.6 0-.2 0-.4 0-.6.8-.6 1.5-1.3 2-2.1z"/></svg>
                </a>
                <a href="#" class="text-blue-600 hover:text-blue-800" aria-label="LinkedIn">
                  <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.8 0-5 2.2-5 5v14c0 2.8 2.2 5 5 5h14c2.8 0 5-2.2 5-5v-14c0-2.8-2.2-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.3c-1 0-1.7-.8-1.7-1.7s.8-1.7 1.7-1.7 1.7.8 1.7 1.7-.8 1.7-1.7 1.7zm13.5 10.3h-3v-4.5c0-1.1 0-2.5-1.5-2.5s-1.7 1.2-1.7 2.4v4.6h-3v-9h2.9v1.2h.1c.4-.7 1.3-1.5 2.7-1.5 2.9 0 3.4 1.9 3.4 4.3v5z"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
