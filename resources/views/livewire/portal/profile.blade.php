<div class="p-5">
    <h1 class="text-5xl">Profile Settings</h1>

    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="w-full mx-auto mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Profile Image Section -->
            <div class="bg-white/50 rounded-xl shadow-lg p-6 text-center">
                <div class=" mb-4">
                    <img src="https://placehold.co/300x300/e2e8f0/blue?text=Profile" alt="Profile Image"
                        class="mx-auto rounded-xl object-cover mb-4">
                    <h2 class="text-[#0f277e] text-2xl font-bold mb-2">{{ auth()->user()->username }}</h2>
                    <p class="text-[#0f277e] text-sm">Joined At {{ auth()->user()->created_at }}</p>
                </div>
                <button
                    class="bg-gradient-to-r from-blue-500 to-[#0f277e] text-white px-6 py-2 rounded-full hover:from-[#0f277e] hover:to-blue-700 transition-all duration-300">
                    IMAGE UPDATE
                </button>
            </div>

            <!-- Profile Information Section -->
            <div class="md:col-span-2 bg-white/50 rounded-xl shadow-lg p-6" x-data="{ activeTab: 'profile' }">
                <div class="border-b border-gray-200 pb-4 mb-6">
                    <div class="flex space-x-6">
                        <span x-on:click="activeTab = 'profile'" class="text-gray-100 px-4 py-2 cursor-pointer"
                            :class="{ 'border-[#0f277e] text-[#0f277e] border-b-2': activeTab === 'profile' }">PROFILE
                            INFORMATION</span>
                        <span x-on:click="activeTab = 'password'" class="text-gray-100 px-4 py-2 cursor-pointer"
                            :class="{ 'border-[#0f277e] text-[#0f277e] border-b-2': activeTab === 'password' }">PASSWORD
                            SETTING</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6" x-show="activeTab === 'profile'">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label class="block text-[#0f277e] text-sm font-medium">First Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 rounded-lg border text-[#0f277e] border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                wire:model="first_name">
                            @error('first_name')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[#0f277e] text-sm font-medium">Username</label>
                            <input type="text" value="Zafarniazi1"
                                class="w-full px-4 py-2 rounded-lg border text-[#0f277e] border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                wire:model="username">
                            @error('username')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[#0f277e] text-sm font-medium">Phone Number</label>
                            <input type="text" value="+44"
                                class="w-full px-4 py-2 rounded-lg border text-[#0f277e] border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                wire:model="phone_number">
                            @error('phone_number')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label class="block text-[#0f277e] text-sm font-medium">Last Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 rounded-lg border text-[#0f277e] border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                wire:model="last_name">
                            @error('last_name')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label class="block text-[#0f277e] text-sm font-medium">Email Address</label>
                            <input type="email" value="Zafarniazi001@outlook.com"
                                class="w-full px-4 py-2 rounded-lg border text-[#0f277e] border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                wire:model="email">
                            @error('email')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button wire:click="updateProfile"
                        class="bg-gradient-to-r from-blue-500 to-[#0f277e] text-white px-6 py-2 rounded-full hover:from-[#0f277e] hover:to-blue-700 transition-all duration-300">
                        Update Profile
                    </button>

                    <!-- Full Width Address Field -->
                    {{-- <div class="col-span-2 space-y-2">
                    <label class="block text-[#0f277e] text-sm font-medium">Address</label>
                    <input type="text" placeholder="Enter your address" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div> --}}
                </div>

                <div x-show="activeTab === 'password'" class="grid grid-cols-2 gap-6">
                    <!-- Right Column -->

                    <div class="space-y-2">
                        <label class="block text-[#0f277e] text-sm font-medium">Password</label>
                        <input type="password"
                            class="w-full px-4 py-2 rounded-lg border text-[#0f277e] border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            wire:model="password">
                        @error('password')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="space-y-2">
                        <label class="block text-[#0f277e] text-sm font-medium">Confirm Password</label>
                        <input type="password"
                            class="w-full px-4 py-2 rounded-lg border text-[#0f277e] border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            wire:model="password_confirmation">
                        @error('password_confirmation')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>


                    <button wire:click="updatePassword"
                        class="bg-gradient-to-r from-blue-500 to-[#0f277e] text-white px-6 py-2 rounded-full hover:from-[#0f277e] hover:to-blue-700 transition-all duration-300">
                        Update Password
                    </button>

                    <!-- Full Width Address Field -->
                    {{-- <div class="col-span-2 space-y-2">
                    <label class="block text-[#0f277e] text-sm font-medium">Address</label>
                    <input type="text" placeholder="Enter your address" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div> --}}
                </div>


            </div>
        </div>
    </div>

</div>
