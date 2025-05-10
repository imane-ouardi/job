<x-head/>
<body >
  <div id="root">
    <x-navsec/>

    <!-- ====== Hero Section Start ====== -->
    <section class="relative w-full min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-blue-700 via-blue-900 to-blue-700 bg-cover">
      <div class="absolute inset-0 bg-blue-900/80"></div>
      <div class="container relative z-10 mx-auto px-16 py-24 flex flex-col items-center text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
          Job Vacancies
        </h1>
        <p class="text-lg text-blue-100 max-w-2xl mx-auto mb-8 drop-shadow">
          Find your next opportunity among thousands of jobs from top companies.
        </p>
      </div>
    </section>
    <!-- ====== Hero Section End ====== -->

    <!-- ====== Shape Divider ====== -->
        <div class="relative">
          <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white ">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
          </div>
        </div>

        <!-- ====== Jobs & Filters Section ====== -->
        <section class="relative md:py-24 py-16 bg-gray-50 ">
          <div class="container mx-auto px-16">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-8">
              <!-- Sidebar Filters -->
              <aside class="lg:col-span-4 md:col-span-6">
                <div class="shadow-lg p-8 rounded-xl bg-white  sticky top-20 space-y-6">
                  <form method="GET" action="{{ route('jobs.index') }}">
                    <div class="space-y-5">
                      <!-- Search Company -->
                      <div>
                        <label for="searchname" class="font-semibold">Search Company</label>
                        <div class="relative mt-2">
                          <svg class="absolute top-3 left-3 w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                          </svg>
                          <input id="searchname"
                            class="w-full py-2 pl-10 pr-3 text-[14px] border border-gray-200 rounded-md focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none bg-transparent text-blue-900 "
                            placeholder="Search" type="text" name="search" value="{{ request('search') }}">
                        </div>
                      </div>
                      <!-- Categories -->
                      <div>
                        <label class="font-semibold">Categories</label>
                        <select name="category" class="form-select w-full border border-gray-200 rounded-md py-2 px-3 mt-1 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none bg-transparent text-blue-900 ">
                          <option value="">All Categories</option>
                          @foreach($categories as $category)
                            <option value="{{ $category->id }}" @selected(request('category') == $category->id)>{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <!-- Locations -->
                      <div>
                        <label class="font-semibold">Location</label>
                        <select name="location" class="form-select w-full border border-gray-200 rounded-md py-2 px-3 mt-1 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none bg-transparent text-blue-900 ">
                          <option value="">All Locations</option>
                          @foreach($locations as $location)
                            <option value="{{ $location }}" @selected(request('location') == $location)>{{ $location }}</option>
                          @endforeach
                        </select>
                      </div>
                      <!-- Job Types -->
                      <div>
                        <label class="font-semibold">Job Types</label>
                        <div class="block mt-2 space-y-2">
                          @foreach($types as $type)
                            <div class="flex justify-between items-center">
                              <label class="inline-flex items-center">
                                <input
                                  class="form-checkbox rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                  type="checkbox"
                                  name="types[]"
                                  value="{{ $type }}"
                                  {{ is_array(request('types')) && in_array($type, request('types')) ? 'checked' : '' }}>
                                <span class="ml-2 text-slate-600 ">{{ $type }}</span>
                              </label>
                              <span class="bg-blue-100 text-blue-600 text-xs px-2 py-0.5 rounded-full">
                                {{ \App\Models\Job::where('type', $type)->count() }}
                              </span>
                            </div>
                          @endforeach
                        </div>
                      </div>
                      <!-- Salary -->
                      <div>
                        <label class="font-semibold">Salary</label>
                        <div class="block mt-2 space-y-2">
                          <label class="inline-flex items-center">
                            <input class="form-radio text-blue-600 focus:ring-blue-500" type="radio" value="1" name="salary" {{ request('salary') == '1' ? 'checked' : '' }}>
                            <span class="ml-2 text-slate-600 ">10k - 15k</span>
                          </label>
                          <label class="inline-flex items-center">
                            <input class="form-radio text-blue-600 focus:ring-blue-500" type="radio" value="2" name="salary" {{ request('salary') == '2' ? 'checked' : '' }}>
                            <span class="ml-2 text-slate-600 ">15k - 25k</span>
                          </label>
                          <label class="inline-flex items-center">
                            <input class="form-radio text-blue-600 focus:ring-blue-500" type="radio" value="3" name="salary" {{ request('salary') == '3' ? 'checked' : '' }}>
                            <span class="ml-2 text-slate-600 ">more than 25K</span>
                          </label>
                        </div>
                      </div>
                      <div>
                        <input class="py-2 px-5 w-full bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition" type="submit" value="Apply Filter">
                      </div>
                      <div>
                        <a href="{{ route('jobs.index') }}" class="block py-2 px-5 w-full text-center bg-gray-200 text-blue-900 font-semibold rounded-lg hover:bg-gray-300 transition mt-2">
                          Reset Filter
                        </a>
                      </div>
                    </div>
                  </form>
                </div>
              </aside>

              <!-- ====== Jobs Grid ====== -->
              <main class="lg:col-span-8 md:col-span-6">
                <div class="grid lg:grid-cols-2 gap-8 mx-auto px-10">
                  @forelse($jobs as $job)
                    <div class="group shadow-lg hover:shadow-2xl transition rounded-xl bg-white  p-6 mb-6">
                      <div class="flex items-center justify-between">
                        <div class="flex items-center">
                          <div class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded-lg mr-3">
                            <img class="w-8 h-8" alt=""
                              src="{{ asset('storage/' . $job->company->logo) }}">
                          </div>
                          <div>
                            <a class="block text-lg font-bold text-blue-900 hover:text-blue-600 transition"
                              href="{{ route('employer.detail', $job->company?->id) }}">
                              {{ $job->company?->name ?? 'Unknown Company' }}
                            </a>
                            <span class="block text-xs text-gray-400">{{ $job->created_at->diffForHumans() }}</span>
                          </div>
                        </div>
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-600">
                          {{ $job->type }}
                        </span>
                      </div>
                      <div class="mt-4">
                        <a class="text-xl font-semibold text-blue-900 hover:text-blue-600 transition"
                          href="{{ route('jobs.show', $job->id) }}">
                          {{ $job->title }}
                        </a>
                        <div class="flex items-center text-gray-500 mt-1">
                          <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                          </svg>
                          {{ $job->location }}
                        </div>
                      </div>
                      <div class="mt-4">
                        <div class="w-full bg-gray-100 rounded-full h-2">
                          <div class="bg-blue-600 h-2 rounded-full" style="width: 55%"></div>
                        </div>
                        <div class="text-xs text-gray-400 mt-1">
                          <span class="font-semibold text-gray-700">{{ $job->applications()->count() }} applied</span> of 40 vacancy
                        </div>
                      </div>
                    </div>
                  @empty
                    <div class="col-span-2 text-center text-gray-400">No jobs found.</div>
                  @endforelse
                </div>
                <div class="flex justify-center mt-8">
                  {{ $jobs->links('pagination::tailwind') }}
                </div>
              </main>
            </div>
          </div>
     
      </section>
    <!-- ====== Features Section (Why you'll love it) ====== -->
    <section class="bg-white  py-20">
      <div class="container mx-auto px-16">
        <div class="grid grid-cols-1 pb-8 text-center">
          <h3 class="mb-4 text-2xl md:text-3xl font-bold text-blue-900 ">Why you'll love it</h3>
          <p class="text-slate-500 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30,000+ companies worldwide.</p>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mt-8">
          <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition">
            <div class="mx-auto mb-4 bg-blue-100 text-blue-600 w-16 h-16 flex items-center justify-center rounded-full text-3xl">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg>
            </div>
            <h4 class="text-lg font-semibold mb-2 text-blue-900">24/7 Support</h4>
            <p class="text-slate-500">Get help anytime from our expert team.</p>
          </div>
          <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition">
            <div class="mx-auto mb-4 bg-blue-100 text-blue-600 w-16 h-16 flex items-center justify-center rounded-full text-3xl">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/></svg>
            </div>
            <h4 class="text-lg font-semibold mb-2 text-blue-900">Tech & Startup Jobs</h4>
            <p class="text-slate-500">Find the best jobs in tech and startups.</p>
          </div>
          <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition">
            <div class="mx-auto mb-4 bg-blue-100 text-blue-600 w-16 h-16 flex items-center justify-center rounded-full text-3xl">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 17l4 4 4-4m0-5V3a1 1 0 00-1-1h-6a1 1 0 00-1 1v9"/></svg>
            </div>
            <h4 class="text-lg font-semibold mb-2 text-blue-900">Save Time</h4>
            <p class="text-slate-500">Apply to jobs quickly and easily.</p>
          </div>
          <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition">
            <div class="mx-auto mb-4 bg-blue-100 text-blue-600 w-16 h-16 flex items-center justify-center rounded-full text-3xl">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
            </div>
            <h4 class="text-lg font-semibold mb-2 text-blue-900">Quick & Easy</h4>
            <p class="text-slate-500">Simple process from search to hire.</p>
          </div>
        </div>
      </div>
    </section>

    <x-footer/>
  </div>
</body>

