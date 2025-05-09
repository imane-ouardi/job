<!doctype html>
<html lang="en">
<x-head />


<body>
    <!-- ====== Navbar Section Start -->
    <x-navsec />
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start ====== -->
    <!-- ====== Hero Section Start ====== -->
    <section
        class="relative w-full min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-blue-700 via-blue-900 to-blue-700 bg-cover">
        <div class="absolute inset-0 bg-blue-900/80"></div>
        <div class="container relative z-10 mx-auto px-4 py-24 flex flex-col items-center text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
                Sign In Page
            </h1>
            <p class="text-lg text-blue-100 max-w-2xl mx-auto mb-8 drop-shadow">
                There are many variations of passages of Lorem Ipsum available.
            </p>

            <ul class="flex items-center justify-center gap-[10px]">
                <li>
                    <a href="{{ route('home') }}" class="flex items-center gap-[10px] text-base font-medium text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="flex items-center gap-[10px] text-base font-medium text-white">
                        <span class="text-white "> / </span>
                        Sign In
                    </a>
                </li>
            </ul>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- ====== Hero Section End ====== -->



    <!-- ====== Forms Section Start -->
    <section class="bg-[#F4F7FF] py-14 lg:py-20 ">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div
                        class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white -2 py-14 px-8 text-center sm:px-12 md:px-[60px]">
                        <div class="mb-10 text-center">
                            <a href="javascript:void(0)" class="mx-auto inline-block max-w-[160px]">
                                <img src="assets/images/logo/logoo.svg" alt="logo" class="" />
                                <img src="assets/images/logo/logoo.svg" alt="logo" class="hidden " />
                            </a>
                        </div>

                        <div class="flex flex-col gap-4 mb-7">
                            <a href="/employer/login"
                                class="block w-full px-5 py-3 text-base font-medium bg-blue-500 text-white rounded-md transition hover:bg-blue-900">
                                Continue As Employer
                            </a>
                            <a href="/employee/login"
                                class="block w-full px-5 py-3 text-base font-medium bg-blue-500 text-white rounded-md transition hover:bg-blue-600">
                                Continue As Employee
                            </a>
                        </div>


                        <p class="text-base text-body-secondary">
                            Not a member yet?
                            <a href="{{ route('signup') }}" class="text-primary hover:underline">
                                Sign Up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== Forms Section End -->

    <!-- ====== Footer Section Start -->
    <x-footer />
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)"
        class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== Made With Button Start -->
    {{-- <a
      target="_blank"
      rel="nofollow noopener"
      class="inline-flex items-center gap-[10px] py-2 px-[14px] rounded-lg bg-white -2 shadow-2 fixed bottom-8 left-4 sm:left-9 z-999"
      href="https://tailgrids.com/"
    >
      <span class="text-base font-medium text-dark-3 ">
        Made with
      </span>
      <span class="block w-px h-4 bg-stroke -3"></span>
      <span class="block max-w-[88px] w-full">
        <img
          src="./assets/images/brands/tailgrids.svg"
          alt="tailgrids"
          class=""
        />
        <img
          src="./assets/images/brands/tailgrids-white.svg"
          alt="tailgrids"
          class="hidden"
        />
      </span>
    </a> --}}
    <!-- ====== Made With Button End -->

    <!-- ====== All Scripts -->
    <script src="assets/js/main.js"></script>
</body>

</html>
