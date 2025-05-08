{{-- <x-head/>
<body class="">
  <x-navsec/>
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

  <!-- ====== Banner Section Start ====== -->
  <div class="relative z-10 overflow-hidden pb-[60px] pt-[120px]  md:pt-[130px] lg:pt-[160px]">
    <div class="container mx-auto px-4">
      <div class="text-center">
        <h1 class="mb-4 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]">
          {{ $blog->title }}
        </h1>
        <p class="mb-5 text-base text-body-color ">
          {{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 120) }}
        </p>
        <ul class="flex items-center justify-center gap-2 text-sm text-gray-500 ">
          <li>
            <a href="{{ route('home') }}" class="font-medium text-dark  hover:underline">Home</a>
          </li>
          <li>/</li>
          <li>
            <span class="text-body-color ">Blog Details</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- ====== Banner Section End ====== -->

  <!-- ====== Blog Details Section Start ====== -->
  <section class="pb-10 pt-20  lg:pb-20 lg:pt-[120px]">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap justify-center -mx-4">
        <div class="w-full px-4">
          <div class="relative z-20 mb-[50px] h-[300px] overflow-hidden rounded-[5px] md:h-[400px] lg:h-[500px]">
            <img
              src="{{ asset('storage/' . $blog->image) }}"
              alt="blog image"
              class="object-cover object-center w-full h-full"
            />
            <div class="absolute top-0 left-0 z-10 flex items-end w-full h-full bg-gradient-to-t from-dark-700 to-transparent">
              <div class="flex flex-wrap items-center p-4 pb-4 sm:px-8">
                <div class="flex items-center mb-4 mr-5 md:mr-10">
                  <div class="w-10 h-10 mr-4 overflow-hidden rounded-full">
                    <img
                      src="{{ $blog->author_avatar ? asset('storage/' . $blog->author_avatar) : '/assets/images/blog/author-default.png' }}"
                      alt="author"
                      class="w-full"
                    />
                  </div>
                  <p class="text-base font-medium text-white">
                    By
                    <span class="text-white font-semibold">{{ $blog->author_name }}</span>
                  </p>
                </div>
                <div class="flex items-center mb-4">
                  <p class="flex items-center mr-5 text-sm font-medium text-white md:mr-6">
                    <span class="mr-2">
                      <svg width="16" height="16" fill="currentColor" class="inline" viewBox="0 0 16 16">
                        <path d="M13.9998 2.6499H12.6998V2.0999C12.6998 1.7999 12.4498 1.5249 12.1248 1.5249C11.7998 1.5249 11.5498 1.7749 11.5498 2.0999V2.6499H4.4248V2.0999C4.4248 1.7999 4.1748 1.5249 3.8498 1.5249C3.5248 1.5249 3.2748 1.7749 3.2748 2.0999V2.6499H1.9998C1.1498 2.6499 0.424805 3.3499 0.424805 4.2249V12.9249C0.424805 13.7749 1.1248 14.4999 1.9998 14.4999H13.9998C14.8498 14.4999 15.5748 13.7999 15.5748 12.9249V4.1999C15.5748 3.3499 14.8498 2.6499 13.9998 2.6499ZM1.5748 7.2999H3.6998V9.7749H1.5748V7.2999ZM4.8248 7.2999H7.4498V9.7749H4.8248V7.2999ZM7.4498 10.8999V13.3499H4.8248V10.8999H7.4498V10.8999ZM8.5748 10.8999H11.1998V13.3499H8.5748V10.8999ZM8.5748 9.7749V7.2999H11.1998V9.7749H8.5748ZM12.2998 7.2999H14.4248V9.7749H12.2998V7.2999ZM1.9998 3.7749H3.2998V4.2999C3.2998 4.5999 3.5498 4.8749 3.8748 4.8749C4.1998 4.8749 4.4498 4.6249 4.4498 4.2999V3.7749H11.5998V4.2999C11.5998 4.5999 11.8498 4.8749 12.1748 4.8749C12.4998 4.8749 12.7498 4.6249 12.7498 4.2999V3.7749H13.9998C14.2498 3.7749 14.4498 3.9749 14.4498 4.2249V6.1749H1.5748V4.2249C1.5748 3.9749 1.7498 3.7749 1.9998 3.7749ZM1.5748 12.8999V10.8749H3.6998V13.3249H1.9998C1.7498 13.3499 1.5748 13.1499 1.5748 12.8999ZM13.9998 13.3499H12.2998V10.8999H14.4248V12.9249C14.4498 13.1499 14.2498 13.3499 13.9998 13.3499Z"/>
                      </svg>
                    </span>
                    {{ $blog->published_at ? $blog->published_at->format('d M Y') : $blog->created_at->format('d M Y') }}
                  </p>
                  <p class="flex items-center text-sm font-medium text-white">
                    <span class="mr-2">
                      <svg width="16" height="16" fill="currentColor" class="inline" viewBox="0 0 16 16">
                        <path d="M7.9998 5.92505C6.8498 5.92505 5.9248 6.85005 5.9248 8.00005C5.9248 9.15005 6.8498 10.075 7.9998 10.075C9.1498 10.075 10.0748 9.15005 10.0748 8.00005C10.0748 6.85005 9.1498 5.92505 7.9998 5.92505ZM7.9998 8.95005C7.4748 8.95005 7.0498 8.52505 7.0498 8.00005C7.0498 7.47505 7.4748 7.05005 7.9998 7.05005C8.5248 7.05005 8.9498 7.47505 8.9498 8.00005C8.9498 8.52505 8.5248 8.95005 7.9998 8.95005Z"/>
                        <path d="M15.3 7.1251C13.875 5.0001 11.9 2.8501 8 2.8501C4.1 2.8501 2.125 5.0001 0.7 7.1251C0.35 7.6501 0.35 8.3501 0.7 8.8751C2.125 10.9751 4.1 13.1501 8 13.1501C11.9 13.1501 13.875 10.9751 15.3 8.8751C15.65 8.3251 15.65 7.6501 15.3 7.1251ZM14.375 8.2501C12.55 10.9251 10.725 12.0251 8 12.0251C5.275 12.0251 3.45 10.9251 1.625 8.2501C1.525 8.1001 1.525 7.9001 1.625 7.7501C3.45 5.0751 5.275 3.9751 8 3.9751C10.725 3.9751 12.55 5.0751 14.375 7.7501C14.45 7.9001 14.45 8.1001 14.375 8.2501Z"/>
                      </svg>
                    </span>
                    {{ $blog->comments_count ?? 0 }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- نص المقال -->
          <div class="prose max-w-3xl mx-auto  prose-lg">
            {!! $blog->content !!}
          </div>
        </div>
      </div>
      <!-- مقالات ذات صلة -->
      <div class="mt-16">
        <h2 class="text-2xl font-bold text-dark  mb-6">Related Articles</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach($relatedBlogs as $related)
            <div class="bg-white -2 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
              <a href="{{ route('blog.details', $related->id) }}">
                <img src="{{ asset('storage/' . $related->image) }}" alt="related blog" class="w-full h-48 object-cover">
              </a>
              <div class="p-5">
                <span class="block mb-2 text-xs text-blue-600 font-semibold">
                  {{ $related->published_at ? $related->published_at->format('M d, Y') : $related->created_at->format('M d, Y') }}
                </span>
                <a href="{{ route('blog.details', $related->id) }}" class="block text-lg font-bold text-dark  hover:text-blue-600 mb-2">
                  {{ $related->title }}
                </a>
                <p class="text-sm text-gray-500 ">
                  {{ $related->excerpt ?? Str::limit(strip_tags($related->content), 80) }}
                </p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Blog Details Section End ====== -->

  <x-footer/>

  <!-- ====== Back To Top Start ====== -->
  <a
    href="javascript:void(0)"
    class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark"
  >
    <span class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"></span>
  </a>
  <!-- ====== Back To Top End ====== -->

  <!-- ====== Made With Button Start ====== -->
  <a
    target="_blank"
    rel="nofollow noopener"
    class="fixed bottom-8 left-4 z-999 inline-flex items-center gap-[10px] rounded-lg bg-white px-[14px] py-2 shadow-2 -2 sm:left-9"
    href="https://tailgrids.com/"
  >
    <span class="text-base font-medium text-dark-3 ">
      Made with
    </span>
    <span class="block w-px h-4 bg-stroke -3"></span>
    <span class="block w-full max-w-[88px]">
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
  <!-- ====== Made With Button End ====== -->

  <script src="assets/js/main.js"></script>
</body> --}}
