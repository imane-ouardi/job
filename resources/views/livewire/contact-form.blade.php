
<form wire:submit.prevent="send">
  @if ($success)
      <div 
          x-data="{ show: true }" 
          x-init="setTimeout(() => show = false, 1000)" 
          x-show="show"
          class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded font-semibold"
          role="alert"
      >
          Sent successfully ✅
      </div>
  @endif

  <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-blue-900">Full Name</label>
      <input type="text" wire:model.defer="name" class="w-full border border-gray-200 rounded-md py-3 px-4" placeholder="Your Name">
      @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
  </div>

  <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-blue-900">Email</label>
      <input type="email" wire:model.defer="email" class="w-full border border-gray-200 rounded-md py-3 px-4" placeholder="you@email.com">
      @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
  </div>

  <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-blue-900">Message</label>
      <textarea wire:model.defer="message" class="w-full border border-gray-200 rounded-md py-3 px-4 resize-none" rows="4" placeholder="Type your message..."></textarea>
      @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
  </div>

  <button type="submit" class="w-full py-3 rounded-lg bg-blue-600 text-white font-semibold text-lg hover:bg-blue-800 transition">
      Send Message
  </button>
</form>
