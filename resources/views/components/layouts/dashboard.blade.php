<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Tayaba International - Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('uploads/logo/logo.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">


    @vite('resources/css/app.css')
    <style>
      /* Scrollbar Track */
::-webkit-scrollbar {
  width: 5px; /* Width of the scrollbar */
}

::-webkit-scrollbar-track {
  background: #333; /* Color of the scrollbar track */
  border-radius: 10px;
}

/* Scrollbar Thumb */
::-webkit-scrollbar-thumb {
  background: linear-gradient(#3d3d3c, #3d3d3c); /* Gradient color for the scrollbar thumb */
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(#3d3d3c, #3d3d3c); /* Darker gradient on hover */
}
    </style>
</head>
<body class="background bg-cover bg-no-repeat text-white font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#ffffff] space-y-6 overflow-auto">
            <div class="flex justify-center text-center border-b border-b-black p-3">
                <img src={{ asset('logo.png') }} className="h-[55px]" style="height: 55px" alt="Logo" srcset="">
            </div>

            <nav class="">
                <a href="#" class="bg-[#0f277e] flex items-center text-[#ffffff] font-semibold p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke="url(#grad1)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined ">
                        <path d="M12 16v5"/>
                        <path d="M16 14v7"/>
                        <path d="M20 10v11"/><path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"/><path d="M4 18v3"/><path d="M8 14v7"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#ffffff] to-[#ffffff] text-transparent bg-clip-text">Trading partner</span>
                </a>
                <a href="#" class="flex items-center text-[#0f277e] font-semibold p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" style="stop-color:#0f277e;stop-opacity:1" />
                              <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                            </linearGradient>
                          </defs>
                        <rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Dashboard</span>
                </a>
                <a href="#" class="flex items-center text-[#0f277e] font-semibold p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-badge-2">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" style="stop-color:#0f277e;stop-opacity:1" />
                              <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                            </linearGradient>
                          </defs>
                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><circle cx="12" cy="10" r="3"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="m14 12.5 1 5.5-3-1-3 1 1-5.5"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Badges</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bitcoin">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" style="stop-color:#0f277e;stop-opacity:1" />
                              <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                            </linearGradient>
                          </defs>
                        <path d="M11.767 19.089c4.924.868 6.14-6.025 1.216-6.894m-1.216 6.894L5.86 18.047m5.908 1.042-.347 1.97m1.563-8.864c4.924.869 6.14-6.025 1.215-6.893m-1.215 6.893-3.94-.694m5.155-6.2L8.29 4.26m5.908 1.042.348-1.97M7.48 20.364l3.126-17.727"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Packages</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-banknote"><rect width="20" height="12" x="2" y="6" rx="2"/><circle cx="12" cy="12" r="2"/><path d="M6 12h.01M18 12h.01"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Invest history</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">deposit history</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 17.5v-11"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">withdraw history</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins"><circle cx="8" cy="8" r="6"/><path d="M18.09 10.37A6 6 0 1 1 10.34 18"/><path d="M7 6h1v4"/><path d="m16.71 13.88.7.71-2.82 2.82"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">transfer</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-app-window-mac"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="M6 8h.01"/><path d="M10 8h.01"/><path d="M14 8h.01"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">my referral</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift"><rect x="3" y="8" width="18" height="4" rx="1"/><path d="M12 8v13"/><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"/><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">referral bonus</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-left"><path d="m16 3 4 4-4 4"/><path d="M20 7H4"/><path d="m8 21-4-4 4-4"/><path d="M4 17h16"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">transactions</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><path d="M13 5v2"/><path d="M13 17v2"/><path d="M13 11v2"/></svg>
                    <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">support ticket</span>
                </a>
                <!-- Add other menu items here following the same structure -->
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 bg-cover bg-no-repeat" style="background:linear-gradient(
          rgba(0, 0, 0, 0.7), 
          rgba(0, 0, 0, 0.7)
        ), url('{{ asset('earth.jpeg') }}') no-repeat; background-size: cover;">
            <!-- Header with notification and user profile -->
            <header class="flex justify-end items-center mb-8 bg-[#ffffff] p-6">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <span class="material-icons text-[#0f277e]">notifications</span>
                        <span class="absolute top-0 right-0 bg-[#0f277e] text-xs text-black font-bold rounded-full px-1">0</span>
                    </div>
                    <img class="w-8 h-8 rounded-full border-2 border-[#0f277e]" src="https://via.placeholder.com/50" alt="User Profile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#0f277e]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                      </svg>                      
                </div>
            </header>
          <div class="p-5">
              <!-- Stats Grid -->
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
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
                    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Total Deposit</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">$0</p>
                </div>
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
                    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Total Invest</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">$0</p>
                </div>
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
                    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Total Earn</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">$0</p>
                </div>
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
                    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Total Withdraw</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">$0</p>
                </div>
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
                    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Total Tickets</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">0</p>
                </div>
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
                    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Total Referral Bonus</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">$0</p>
                </div>
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
                    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Total Team Sales</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">$0</p>
                </div>
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
                    <p class="text-sm font-semibold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Total Group Sales</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">$0</p>
                </div>
            </div>

            <!-- Sales Levels -->
            <div class="mt-8 text-gray-300">
                <p class="font-semibold">Sales Levels:</p>
                <ul class="space-y-2">
                    <li>Level 1 Sales: $0</li>
                    <li>Level 2 Sales: $0</li>
                    <li>Level 3 Sales: $0</li>
                    <li>Level 4 Sales: $0</li>
                    <li>Level 5 Sales: $0</li>
                </ul>
            </div>
          </div>
        </main>
    </div>

    <!-- Link to Material Icons if you want to use Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</body>
</html>
