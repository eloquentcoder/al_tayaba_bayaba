@props(['title', 'value'])

<div class="bg-[#ffffff] p-4 rounded-lg shadow-lg text-center text-white">
    <!-- Hexagon Icon Background -->
    <div class="flex items-center justify-center mb-4">
        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
            <!-- Icon (replace with an actual icon as needed) -->
            <svg class="w-6 h-6 text-[#0f277e]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
            </svg>
        </div>
    </div>
    <!-- Card Title -->
    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">{{ $title }}</p>
    <!-- Card Value with Gradient -->
    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">{{ $value }}</p>
</div>