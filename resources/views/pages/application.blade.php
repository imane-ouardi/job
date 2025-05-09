<x-head />
<x-navsec />
        <!-- ====== Hero Section Start ====== -->
        <section class="relative w-full min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-blue-700 via-blue-900 to-blue-700 bg-cover">
            <div class="absolute inset-0 bg-blue-900/80"></div>
            <div class="container relative z-10 mx-auto px-4 py-24 flex flex-col items-center text-center">
              <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
                Job Application 

            </h1>
              
            </div>
          </section>
          <!-- ====== Hero Section End ====== -->
<section class="min-h-screen flex items-center justify-center bg-gray-100  py-12 px-4">
    <div class="bg-white  rounded-lg shadow-md p-8 w-full max-w-2xl">
        <h2 class="text-2xl font-bold text-center text-gray-800  mb-6">Job Application Form</h2>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <input type="hidden" name="job_id" value="{{ $jobId }}">
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

            <!-- Full Name -->
            <div>
                <label for="full_name" class="block mb-2 font-semibold text-gray-700 ">Full Name</label>
                <input type="text" name="full_name" id="full_name" required
                       class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800  focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block mb-2 font-semibold text-gray-700 ">Email</label>
                <input type="email" name="email" id="email" required
                       class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800  focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone" class="block mb-2 font-semibold text-gray-700 ">Phone Number</label>
                <input type="tel" name="phone" id="phone" required
                       class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800  focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Education -->
            <div>
                <label for="education" class="block mb-2 font-semibold text-gray-700 ">Education</label>
                <input type="text" name="education" id="education"
                       class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800 "
                       placeholder="e.g., Bachelor's in Computer Science">
            </div>

            <!-- Work Experience -->
            <div>
                <label for="experience" class="block mb-2 font-semibold text-gray-700 ">Work Experience</label>
                <textarea name="experience" id="experience" rows="4"
                          class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800 "
                          placeholder="List your previous jobs and responsibilities"></textarea>
            </div>

            <!-- Skills -->
            <div>
                <label for="skills" class="block mb-2 font-semibold text-gray-700 ">Skills</label>
                <textarea name="skills" id="skills" rows="3"
                          class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800 "
                          placeholder="e.g., HTML, CSS, Laravel, Leadership..."></textarea>
            </div>

            <!-- Resume Upload -->
            <div>
                <label for="cv" class="block mb-2 font-semibold text-gray-700 ">Upload Resume (PDF or DOCX)</label>
                <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx" required
                       class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800 ">
            </div>

            <!-- Extra File (optional) -->
            <div>
                <label for="extra_file" class="block mb-2 font-semibold text-gray-700 ">Additional File (Optional)</label>
                <input type="file" name="extra_file" id="extra_file"
                       class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800 ">
            </div>

            <!-- Cover Letter -->
            <div>
                <label for="cover_letter" class="block mb-2 font-semibold text-gray-700 ">Cover Letter</label>
                <textarea name="cover_letter" id="cover_letter" rows="5"
                          class="w-full px-4 py-2 border border-gray-300  rounded-lg bg-white text-gray-800 "
                          placeholder="Write a brief letter explaining your interest in this role"></textarea>
            </div>

            <!-- Terms Agreement -->
            <div class="flex items-center">
                <input type="checkbox" name="terms" id="terms" required class="mr-2">
                <label for="terms" class="text-sm text-gray-700 ">I agree to the <a href="#" class="underline">terms and conditions</a></label>
            </div>

            <button type="submit"
                    class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition duration-200">
                Submit Application
            </button>
        </form>
    </div>
</section>

<x-footer />
