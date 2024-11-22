<aside class="w-64 bg-[#ffffff] space-y-6 overflow-auto h-screen">
    <div class="flex justify-center text-center border-b border-b-black p-3">
        <img src={{ asset('logo.png') }} className="h-[55px]" style="height: 55px" alt="Logo" srcset="">
    </div>

    <nav class="">
        <a href="{{ route('admin.dashboard') }}"
            class="{{ request()->routeIs('admin.dashboard') ? 'bg-[#0f277e] text-[#ffffff]' : 'text-[#0f277e]' }} flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-layout-grid">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#0f277e;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                    </linearGradient>
                </defs>
                <rect width="7" height="7" x="3" y="3" rx="1" />
                <rect width="7" height="7" x="14" y="3" rx="1" />
                <rect width="7" height="7" x="14" y="14" rx="1" />
                <rect width="7" height="7" x="3" y="14" rx="1" />
            </svg>
            <span
                class="uppercase ml-2 {{ request()->routeIs('admin.dashboard') ? 'text-[#ffffff]' : 'text-[#0f277e]' }}">Dashboard</span>
        </a>
        <a href="{{ route('admin.admins') }}" class="{{ request()->routeIs('admin.admins') ? 'bg-[#0f277e] text-[#ffffff]' : 'text-[#0f277e]' }} flex items-center text-[#0f277e] p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-file-badge-2">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#0f277e;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                <circle cx="12" cy="10" r="3" />
                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                <path d="m14 12.5 1 5.5-3-1-3 1 1-5.5" />
            </svg>
            <span
                class="uppercase ml-2 {{ request()->routeIs('admin.admins') ? 'text-[#ffffff]' : 'text-[#0f277e]' }}">Admins</span>
        </a>
        <a href="{{ route('admin.plans') }}" class="{{ request()->routeIs('admin.plans') ? 'bg-[#0f277e] text-[#ffffff]' : 'text-[#0f277e]' }} flex items-center text-[#0f277e] p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-file-badge-2">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#0f277e;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                <circle cx="12" cy="10" r="3" />
                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                <path d="m14 12.5 1 5.5-3-1-3 1 1-5.5" />
            </svg>
            <span
                class="uppercase ml-2 {{ request()->routeIs('admin.plans') ? 'text-[#ffffff]' : 'text-[#0f277e]' }}">Plans</span>
        </a>
        <a href="{{ route('admin.deposits') }}" class="{{ request()->routeIs('admin.deposits') ? 'bg-[#0f277e] text-[#ffffff]' : 'text-[#0f277e]' }} flex items-center text-[#0f277e] p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-file-badge-2">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#0f277e;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                <circle cx="12" cy="10" r="3" />
                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                <path d="m14 12.5 1 5.5-3-1-3 1 1-5.5" />
            </svg>
            <span
                class="uppercase ml-2 {{ request()->routeIs('admin.deposits') ? 'text-[#ffffff]' : 'text-[#0f277e]' }}">Deposits</span>
        </a>
        <!-- Add other menu items here following the same structure -->
    </nav>
</aside>
