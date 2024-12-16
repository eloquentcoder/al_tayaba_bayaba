<header class="flex justify-end items-center mb-8 bg-[#ffffff] p-6 relative">
    <div class="flex items-center space-x-4">
        <div class="relative">
            <span class="material-icons text-[#0f277e] cursor-pointer">notifications</span>
            <span class="absolute top-0 right-0 bg-[#0f277e] text-xs text-black font-bold rounded-full px-1">0</span>
        </div>

        <!-- Profile Picture with Dropdown Trigger -->
        <div class="relative">
            <img id="profileDropdownButton" class="w-8 h-8 rounded-full border-2 border-[#0f277e] cursor-pointer" src="https://via.placeholder.com/50" alt="User Profile">
            <!-- Dropdown Menu -->
            <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-20">
                <a href="{{ route('admin.profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">My Profile</a>
                <a href="{{ route('admin.settings') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Settings</a>
                <form action="{{ route('logout') }}" method="POST" class="block">
                    @csrf
                    <button type="submit" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</button>
                </form>    
            </div>
        </div>

        <!-- Menu Icon (for mobile or additional options) -->
        <svg id="menuDropdownButton" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#0f277e] cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </div>
</header>

<!-- JavaScript for toggling the dropdown -->
<script>
    document.getElementById('profileDropdownButton').addEventListener('click', function() {
        const dropdown = document.getElementById('profileDropdown');
        dropdown.classList.toggle('hidden');
    });
</script>