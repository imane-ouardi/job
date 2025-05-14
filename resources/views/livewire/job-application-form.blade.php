<div>
    <section class="relative w-full min-h-[60vh] flex flex-col justify-center bg-gradient-to-br from-blue-700 via-blue-900 to-blue-700 bg-cover">
        <div class="absolute inset-0 bg-blue-900/80"></div>
        <div class="container relative z-10 mx-auto px-4 py-24 flex flex-col items-center text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
                Job Application
            </h1>
        </div>
    </section>

    <section class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4">
        <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-2xl">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Job Application Form</h2>

         @if (session()->has('success'))
                <div 
                    class="mb-4 p-4 bg-green-100 border border-green-400 text-green-800 rounded-lg text-center font-semibold transition-all duration-300"
                    x-data="{ show: true }"
                    x-init="setTimeout(() => show = false, 7000)"
                    x-show="show"
                >
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="submit" class="space-y-6" enctype="multipart/form-data">
                <!-- Full Name -->
                <div>
                    <label for="full_name" class="block mb-2 font-semibold text-gray-700">Full Name</label>
                    <input type="text" wire:model.defer="full_name" id="full_name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('full_name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>
                    <input type="email" wire:model.defer="email" id="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone" class="block mb-2 font-semibold text-gray-700">Phone Number</label>
                    <input type="tel" wire:model.defer="phone" id="phone" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Education -->
                <div>
                    <label for="education" class="block mb-2 font-semibold text-gray-700">Education</label>
                    <input type="text" wire:model.defer="education" id="education"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800"
                        placeholder="e.g., Bachelor's in Computer Science">
                    @error('education') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Work Experience -->
                <div>
                    <label for="experience" class="block mb-2 font-semibold text-gray-700">Work Experience</label>
                    <textarea wire:model.defer="experience" id="experience" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800"
                        placeholder="List your previous jobs and responsibilities"></textarea>
                    @error('experience') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Skills -->
                <div>
                    <label for="skills" class="block mb-2 font-semibold text-gray-700">Skills</label>
                    <textarea wire:model.defer="skills" id="skills" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800"
                        placeholder="e.g., HTML, CSS, Laravel, Leadership..."></textarea>
                    @error('skills') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Resume Upload -->
                <div>
                    <label for="cv" class="block mb-2 font-semibold text-gray-700">Upload Resume (PDF or DOCX)</label>
                    <input type="file" wire:model="cv" id="cv" accept=".pdf,.doc,.docx" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800">
                    @error('cv') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Extra File (optional) -->
                <div>
                    <label for="extra_file" class="block mb-2 font-semibold text-gray-700">Additional File (Optional)</label>
                    <input type="file" wire:model="extra_file" id="extra_file"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800">
                    @error('extra_file') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Cover Letter -->
                <div>
                    <label for="cover_letter" class="block mb-2 font-semibold text-gray-700">Cover Letter</label>
                    <textarea wire:model.defer="cover_letter" id="cover_letter" rows="5"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-800"
                        placeholder="Write a brief letter explaining your interest in this role"></textarea>
                    @error('cover_letter') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Terms Agreement -->
                <div class="flex items-center">
                    <input type="checkbox" wire:model="terms" id="terms" required class="mr-2">
                    <label for="terms" class="text-sm text-gray-700">I agree to the <a href="#" class="underline">terms and conditions</a></label>
                    @error('terms') <span class="text-red-600 text-sm ml-2">{{ $message }}</span> @enderror
                </div>

                <button type="submit"
                    class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition duration-200">
                    Submit Application
                </button>
            </form>
        </div>
    </section>
</div>

@livewireScripts
<script src="//unpkg.com/alpinejs" defer></script>