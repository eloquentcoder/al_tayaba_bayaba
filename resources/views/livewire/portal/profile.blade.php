<div class="p-5">
  <h1 class="text-5xl">Profile Settings</h1>

  <div class="w-full mx-auto mt-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Profile Image Section -->
        <div class="bg-white/50 rounded-xl shadow-lg p-6 text-center">
            <div class="relative mb-4">
                <img src="https://placehold.co/300x300/e2e8f0/blue?text=Profile" alt="Profile Image" class="mx-auto rounded-xl object-cover mb-4">
                <h2 class="text-[#0f277e] text-2xl font-bold mb-2">Zafarniazi1</h2>
                <p class="text-[#0f277e] text-sm">Joined At 04 May, 2024 10:44 AM</p>
            </div>
            <button class="bg-gradient-to-r from-blue-500 to-[#0f277e] text-white px-6 py-2 rounded-full hover:from-[#0f277e] hover:to-blue-700 transition-all duration-300">
                IMAGE UPDATE
            </button>
        </div>

        <!-- Profile Information Section -->
        <div class="md:col-span-2 bg-white/50 rounded-xl shadow-lg p-6">
            <div class="border-b border-gray-200 pb-4 mb-6">
                <div class="flex space-x-6">
                    <span class="text-[#0f277e] font-semibold px-4 py-2 border-b-2 border-[#0f277e]">PROFILE INFORMATION</span>
                    <span class="text-gray-400 px-4 py-2">PASSWORD SETTING</span>
                    <span class="text-gray-400 px-4 py-2">IDENTITY VERIFICATION</span>
                    <span class="text-gray-400 px-4 py-2">ADDRESS VERIFICATION</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label class="block text-[#0f277e] text-sm font-medium">First Name</label>
                        <input type="text" value="Zafar" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-[#0f277e] text-sm font-medium">Username</label>
                        <input type="text" value="Zafarniazi1" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-[#0f277e] text-sm font-medium">Phone Number</label>
                        <input type="text" value="+44" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label class="block text-[#0f277e] text-sm font-medium">Last Name</label>
                        <input type="text" value="Niazi" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-[#0f277e] text-sm font-medium">Email Address</label>
                        <input type="email" value="Zafarniazi001@outlook.com" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-[#0f277e] text-sm font-medium">Preferred Language</label>
                        <input type="text" value="English" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                </div>

                <!-- Full Width Address Field -->
                <div class="col-span-2 space-y-2">
                    <label class="block text-[#0f277e] text-sm font-medium">Address</label>
                    <input type="text" placeholder="Enter your address" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
            </div>
        </div>
    </div>
</div>

</div>
