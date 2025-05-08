<!doctype html>
<html lang="en">

  <x-head/>
  <body>
    <!-- ====== Navbar Section Start -->
    <x-navsec/>
    <!-- ====== Navbar Section End -->
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

    
  
    <!-- ====== Footer Section Start -->
    <x-footer/>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== Made With Button Start -->
    <!-- ====== Made With Button End -->

    <!-- ====== All Scripts -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
