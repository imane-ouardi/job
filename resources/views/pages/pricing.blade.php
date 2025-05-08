{{-- <!doctype html>
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
          Job Vacancies
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto mb-8 drop-shadow">
          Find your next opportunity among thousands of jobs from top companies.
        </p>
      </div>
    </section>
    <!-- ====== Hero Section End ====== -->

    <!-- ====== Banner Section Start -->
    <div
      class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] "
    >
      <div
        class="absolute bottom-0 left-0 w-full h-px bg-linear-to-r from-stroke/0 via-stroke  to-stroke/0"
      ></div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="text-center">
              <h1
                class="mb-4 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                Pricing Page
              </h1>
              <p class="mb-5 text-base text-body-color ">
                There are many variations of passages of Lorem Ipsum available.
              </p>

              <ul class="flex items-center justify-center gap-[10px]">
                <li>
                  <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-[10px] text-base font-medium text-dark "
                  >
                    Home
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="flex items-center gap-[10px] text-base font-medium text-body-color"
                  >
                    <span class="text-body-color "> / </span>
                    Pricings
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== Pricing Section Start -->
    <section
      id="pricing"
      class="relative z-20 overflow-hidden bg-white  pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
    >
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                Pricing Table
              </span>
              <h2
                class="mb-3 text-3xl font-bold text-dark  sm:text-4xl md:leading-[1.2] md:text-[40px]"
              >
                Awesome Pricing Plan
              </h2>
              <p class="text-base text-body-color ">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="relative z-10 px-8 py-10 mb-10 overflow-hidden bg-white rounded-xl -2 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-14"
            >
              <span
                class="block mb-5 text-xl font-medium text-dark "
              >
                Starter
              </span>
              <h2
                class="mb-11 text-4xl font-semibold text-dark  xl:leading-[1.21] xl:text-[42px]"
              >
                <span class="text-xl font-medium">$</span>
                <span class="-ml-1 -tracking-[2px]">25.00</span>
                <span
                  class="text-base font-normal text-body-color "
                >
                  Per Month
                </span>
              </h2>
              <div class="mb-[50px]">
                <h5 class="mb-5 text-lg font-medium text-dark ">
                  Features
                </h5>
                <div class="flex flex-col gap-[14px]">
                  <p class="text-base text-body-color ">
                    Up to 1 User
                  </p>
                  <p class="text-base text-body-color ">
                    All UI components
                  </p>
                  <p class="text-base text-body-color ">
                    Lifetime access
                  </p>
                  <p class="text-base text-body-color ">
                    Free updates
                  </p>
                </div>
              </div>
              <a
                href="javascript:void(0)"
                class="inline-block py-3 text-base font-medium text-center text-white transition rounded-md bg-primary px-7 hover:bg-blue-dark"
              >
                Purchase Now
              </a>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="relative z-10 px-8 py-10 mb-10 overflow-hidden bg-white rounded-xl -2 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-14"
            >
              <p
                class="absolute right-[-50px] top-[60px] inline-block -rotate-90 rounded-tl-md rounded-bl-md bg-primary py-2 px-5 text-base font-medium text-white"
              >
                Recommended
              </p>
              <span
                class="block mb-5 text-xl font-medium text-dark "
              >
                Basic
              </span>
              <h2
                class="mb-11 text-4xl font-semibold text-dark  xl:leading-[1.21] xl:text-[42px]"
              >
                <span class="text-xl font-medium">$</span>
                <span class="-ml-1 -tracking-[2px]">59.00</span>
                <span
                  class="text-base font-normal text-body-color "
                >
                  Per Month
                </span>
              </h2>
              <div class="mb-[50px]">
                <h5 class="mb-5 text-lg font-medium text-dark ">
                  Features
                </h5>
                <div class="flex flex-col gap-[14px]">
                  <p class="text-base text-body-color ">
                    Up to 1 User
                  </p>
                  <p class="text-base text-body-color ">
                    All UI components
                  </p>
                  <p class="text-base text-body-color ">
                    Lifetime access
                  </p>
                  <p class="text-base text-body-color ">
                    Free updates
                  </p>
                </div>
              </div>
              <a
                href="javascript:void(0)"
                class="inline-block py-3 text-base font-medium text-center text-white transition rounded-md bg-primary px-7 hover:bg-blue-dark"
              >
                Purchase Now
              </a>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="relative z-10 px-8 py-10 mb-10 overflow-hidden bg-white rounded-xl -2 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-14"
            >
              <span
                class="block mb-5 text-xl font-medium text-dark "
              >
                Premium
              </span>
              <h2
                class="mb-11 text-4xl font-semibold text-dark  xl:leading-[1.21] xl:text-[42px]"
              >
                <span class="text-xl font-medium">$</span>
                <span class="-ml-1 -tracking-[2px]">99.00</span>
                <span
                  class="text-base font-normal text-body-color "
                >
                  Per Month
                </span>
              </h2>
              <div class="mb-[50px]">
                <h5 class="mb-5 text-lg font-medium text-dark ">
                  Features
                </h5>
                <div class="flex flex-col gap-[14px]">
                  <p class="text-base text-body-color ">
                    Up to 1 User
                  </p>
                  <p class="text-base text-body-color ">
                    All UI components
                  </p>
                  <p class="text-base text-body-color ">
                    Lifetime access
                  </p>
                  <p class="text-base text-body-color ">
                    Free updates
                  </p>
                </div>
              </div>
              <a
                href="javascript:void(0)"
                class="inline-block py-3 text-base font-medium text-center text-white transition rounded-md bg-primary px-7 hover:bg-blue-dark"
              >
                Purchase Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Pricing Section End -->

    <!-- ====== Footer Section Start -->
  <x-footer/>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== Made With Button Start -->
    <a
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
          class="hidden "
        />
      </span>
    </a>
    <!-- ====== Made With Button End -->

    <!-- ====== All Scripts -->
    <script src="assets/js/main.js"></script>
  </body>
</html> --}}
