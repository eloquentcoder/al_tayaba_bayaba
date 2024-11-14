<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wealth Guros - Dashboard</title>
    @vite('resources/css/app.css')
    <style>
        .background {
            background: url({asset('floating-earth.jpg')});
        }
    </style>
</head>
<body class="background bg-cover bg-no-repeat text-white font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#222222] space-y-6">
            <div class="text-center border-b border-b-black p-3">
                <h1 class="text-2xl font-bold text-[#b89056]">WEALTH GUROS</h1>
                <p class="text-sm text-[#b89056]">Grow Wealth Know Your Worth</p>
            </div>

            <nav class="">
                <a href="#" class="bg-black flex items-center text-yellow-500 font-semibold p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">dashboard</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Trading partner</span>
                </a>
                <a href="#" class="bg-black flex items-center text-yellow-500 font-semibold p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">dashboard</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Dashboard</span>
                </a>
                <a href="#" class="bg-black flex items-center text-yellow-500 font-semibold p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">dashboard</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Badges</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Packages</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Invest history</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">deposit history</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">withdraw history</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">transfer</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">my referral</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">referral bonus</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">transactions</span>
                </a>
                <a href="#" class="flex items-center p-5 rounded hover:bg-gray-700 border-b border-b-black">
                    <span class="material-icons bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">account_balance_wallet</span>
                    <span class="uppercase ml-2 bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">support ticket</span>
                </a>
                <!-- Add other menu items here following the same structure -->
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 bg-cover bg-no-repeat bg-top" style="background-image: url('{{ asset('floating-earth.jpg') }}');">
            <!-- Header with notification and user profile -->
            <header class="flex justify-end items-center mb-8 bg-[#222222] p-6">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <span class="material-icons text-yellow-500">notifications</span>
                        <span class="absolute top-0 right-0 bg-yellow-500 text-xs text-black font-bold rounded-full px-1">3227</span>
                    </div>
                    <img class="w-8 h-8 rounded-full border-2 border-yellow-500" src="https://via.placeholder.com/50" alt="User Profile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                      </svg>                      
                </div>
            </header>
          <div class="p-5">
              <!-- Stats Grid -->
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-[#222222] p-4 rounded-lg shadow-lg text-center text-white">
                    <!-- Hexagon Icon Background -->
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
                            <!-- Icon (replace with an actual icon as needed) -->
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Card Title -->
                    <p class="text-sm font-semibold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Total Deposit</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">$25,000.0</p>
                </div>
                <div class="bg-[#222222] p-4 rounded-lg shadow-lg text-center text-white">
                    <!-- Hexagon Icon Background -->
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
                            <!-- Icon (replace with an actual icon as needed) -->
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Card Title -->
                    <p class="text-sm font-semibold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Total Invest</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">$25,000.0</p>
                </div>
                <div class="bg-[#222222] p-4 rounded-lg shadow-lg text-center text-white">
                    <!-- Hexagon Icon Background -->
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
                            <!-- Icon (replace with an actual icon as needed) -->
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Card Title -->
                    <p class="text-sm font-semibold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Total Earn</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">$43,100.0</p>
                </div>
                <div class="bg-[#222222] p-4 rounded-lg shadow-lg text-center text-white">
                    <!-- Hexagon Icon Background -->
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
                            <!-- Icon (replace with an actual icon as needed) -->
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Card Title -->
                    <p class="text-sm font-semibold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Total Withdraw</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">$8,000.0</p>
                </div>
                <div class="bg-[#222222] p-4 rounded-lg shadow-lg text-center text-white">
                    <!-- Hexagon Icon Background -->
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
                            <!-- Icon (replace with an actual icon as needed) -->
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Card Title -->
                    <p class="text-sm font-semibold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Total Tickets</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">0</p>
                </div>
                <div class="bg-[#222222] p-4 rounded-lg shadow-lg text-center text-white">
                    <!-- Hexagon Icon Background -->
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
                            <!-- Icon (replace with an actual icon as needed) -->
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Card Title -->
                    <p class="text-sm font-semibold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Total Referral Bonus</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">$25,000.0</p>
                </div>
                <div class="bg-[#222222] p-4 rounded-lg shadow-lg text-center text-white">
                    <!-- Hexagon Icon Background -->
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
                            <!-- Icon (replace with an actual icon as needed) -->
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Card Title -->
                    <p class="text-sm font-semibold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Total Team Sales</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">$2800.0</p>
                </div>
                <div class="bg-[#222222] p-4 rounded-lg shadow-lg text-center text-white">
                    <!-- Hexagon Icon Background -->
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-gray-900 hexagon w-12 h-12 flex items-center justify-center rounded-full">
                            <!-- Icon (replace with an actual icon as needed) -->
                            <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l10.392 6v12l-10.392 6-10.392-6v-12z"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Card Title -->
                    <p class="text-sm font-semibold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">Total Group Sales</p>
                    <!-- Card Value with Gradient -->
                    <p class="text-3xl font-bold bg-gradient-to-r from-white to-yellow-500 text-transparent bg-clip-text">$115,466</p>
                </div>
            </div>

            <!-- Sales Levels -->
            <div class="mt-8 text-gray-300">
                <p class="font-semibold">Sales Levels:</p>
                <ul class="space-y-2">
                    <li>Level 1 Sales: $47,285</li>
                    <li>Level 2 Sales: $23,358</li>
                    <li>Level 3 Sales: $8,287</li>
                    <li>Level 4 Sales: $4,700</li>
                    <li>Level 5 Sales: $14,292</li>
                </ul>
            </div>
          </div>
        </main>
    </div>

    <!-- Link to Material Icons if you want to use Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</body>
</html>
