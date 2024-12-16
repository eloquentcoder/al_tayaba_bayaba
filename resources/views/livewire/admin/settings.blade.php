<div class="p-5">
    <h1 class="text-5xl">General Settings</h1>

    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="w-full mx-auto mt-10">
        <div class="grid grid-cols-1 gap-8">
            <!-- Profile Information Section -->
            <div class="md:col-span-2 bg-white/50 rounded-xl shadow-lg p-6">
                <div class="grid grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-4 col-span-2">
                        <div class="space-y-2">
                            <label class="block text-[#0f277e] text-sm font-medium">Withdrawal Day</label>
                            <input type="number"
                                class="w-full px-4 py-2 rounded-lg border text-[#0f277e] border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                wire:model="withdrawal_day">
                            @error('withdrawal_day')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button wire:click="updateSettings"
                        class="bg-gradient-to-r from-blue-500 to-[#0f277e] text-white px-6 py-2 rounded-full hover:from-[#0f277e] hover:to-blue-700 transition-all duration-300">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
