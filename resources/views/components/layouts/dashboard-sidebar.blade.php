<aside id="sidebar" class="hidden fixed inset-y-0 left-0 w-64 bg-[#ffffff] space-y-6 overflow-auto h-screen lg:block">
    <div class="flex justify-center text-center border-b border-b-black p-3">
        <img src={{ asset('logo.png') }} className="h-[55px]" style="height: 55px" alt="Logo" srcset="">
    </div>

    <div class="w-full p-4">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-[#0f277e] text-lg font-semibold">Account Balance</h2>
            <div class="bg-blue-500/20 px-2 py-1 rounded">
                <span class="text-blue-500 font-medium text-sm">USD</span>
            </div>
        </div>
        <div>

            <div class="space-y-1">
                <div class="flex items-center justify-between">
                    <span class="text-[#0f277e] text-sm">Deposit Wallet</span>
                    <span class="text-[#0f277e] font-medium">${{ auth()->user()->balance->deposit_balance }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-[#0f277e] text-sm">Old Main Balance</span>
                    <span class="text-[#0f277e] font-medium">${{ auth()->user()->balance->main_balance }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-[#0f277e] text-sm">EMR Wallet</span>
                    <span class="text-[#0f277e] font-medium">${{ auth()->user()->balance->emr_balance }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-[#0f277e] text-sm">EMR Share Wallet</span>
                    <span class="text-[#0f277e] font-medium">${{ auth()->user()->balance->emr_share_balance }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-[#0f277e] text-sm">Sales Bonus Wallet</span>
                    <span class="text-[#0f277e] font-medium">${{ auth()->user()->balance->sales_bonus_balance }}</span>
                </div>
            </div>
            <div class="mt-5 w-full flex gap-2">
                <a href="{{ route('portal.add-fund') }}"
                    class="rounded-full text-white bg-[#0f277e] p-2 w-full flex justify-center items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                    </svg>
                    <span>Deposit</span>
                </a>
                <a href="{{ route('portal.payout') }}"
                    class="rounded-full text-white bg-[#0f277e] p-2 w-full flex justify-center items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                    </svg>

                    <span>Withdraw</span>
                </a>
            </div>


        </div>
    </div>

    <nav class="">
        <a href="#"
            class="{{ request()->routeIs('portal.trading-partner') ? 'bg-[#0f277e] text-[#ffffff]' : 'text-[#0f277e]' }} flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke="url(#grad1)" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined ">
                <path d="M12 16v5" />
                <path d="M16 14v7" />
                <path d="M20 10v11" />
                <path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15" />
                <path d="M4 18v3" />
                <path d="M8 14v7" />
            </svg>
            <span
                class="uppercase ml-2 {{ request()->routeIs('portal.trading-partner') ? 'text-[#ffffff]' : 'text-[#0f277e]' }}">Trading
                partner</span>
        </a>
        <a href="{{ route('portal.dashboard') }}"
            class="{{ request()->routeIs('portal.dashboard') ? 'bg-[#0f277e] text-[#ffffff]' : 'text-[#0f277e]' }} flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
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
                class="uppercase ml-2 {{ request()->routeIs('portal.dashboard') ? 'text-[#ffffff]' : 'text-[#0f277e]' }}">Dashboard</span>
        </a>
        <a href="{{ route('portal.packages') }}"
            class="{{ request()->routeIs('portal.packages') ? 'bg-[#0f277e] text-[#ffffff]' : 'text-[#0f277e]' }} flex items-center text-[#0f277e] p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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
                class="uppercase ml-2 {{ request()->routeIs('portal.packages') ? 'text-[#ffffff]' : 'text-[#0f277e]' }}">Packages</span>
        </a>
        <a href="#"
            class="flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-bitcoin">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#0f277e;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path
                    d="M11.767 19.089c4.924.868 6.14-6.025 1.216-6.894m-1.216 6.894L5.86 18.047m5.908 1.042-.347 1.97m1.563-8.864c4.924.869 6.14-6.025 1.215-6.893m-1.215 6.893-3.94-.694m5.155-6.2L8.29 4.26m5.908 1.042.348-1.97M7.48 20.364l3.126-17.727" />
            </svg>
            <span
                class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Badge</span>
        </a>
        <a href="#"
            class="flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-banknote">
                <rect width="20" height="12" x="2" y="6" rx="2" />
                <circle cx="12" cy="12" r="2" />
                <path d="M6 12h.01M18 12h.01" />
            </svg>
            <span
                class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">Invest
                history</span>
        </a>
        <a href="{{ route('portal.deposit-history') }}"
            class="flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-badge-dollar-sign">
                <path
                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                <path d="M12 18V6" />
            </svg>
            <span
                class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">deposit
                history</span>
        </a>
        <a href="#"
            class="flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-receipt">
                <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z" />
                <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                <path d="M12 17.5v-11" />
            </svg>
            <span
                class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">withdraw
                history</span>
        </a>
        <a href="#"
            class="flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-coins">
                <circle cx="8" cy="8" r="6" />
                <path d="M18.09 10.37A6 6 0 1 1 10.34 18" />
                <path d="M7 6h1v4" />
                <path d="m16.71 13.88.7.71-2.82 2.82" />
            </svg>
            <span
                class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">transfer</span>
        </a>
        <a href="{{ route('portal.referrals') }}"
            class="flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-app-window-mac">
                <rect width="20" height="16" x="2" y="4" rx="2" />
                <path d="M6 8h.01" />
                <path d="M10 8h.01" />
                <path d="M14 8h.01" />
            </svg>
            <span class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">my
                referral</span>
        </a>
        <a href="#"
            class="flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-gift">
                <rect x="3" y="8" width="18" height="4" rx="1" />
                <path d="M12 8v13" />
                <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7" />
                <path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5" />
            </svg>
            <span
                class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">referral
                bonus</span>
        </a>
        <a href="{{ route('portal.transactions') }}"
            class="{{ request()->routeIs('portal.packages') ? 'bg-[#0f277e] text-[#ffffff]' : 'text-[#0f277e]' }} flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-arrow-right-left">
                <path d="m16 3 4 4-4 4" />
                <path d="M20 7H4" />
                <path d="m8 21-4-4 4-4" />
                <path d="M4 17h16" />
            </svg>
            <span
                class="uppercase ml-2 {{ request()->routeIs('portal.packages') ? 'text-[#ffffff]' : 'text-[#0f277e]' }}">transactions</span>
        </a>
        <a href="#"
            class="flex items-center p-5 rounded hover:bg-gray-100 hover:text-white border-b border-b-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="url(#grad1)" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-ticket">
                <path
                    d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                <path d="M13 5v2" />
                <path d="M13 17v2" />
                <path d="M13 11v2" />
            </svg>
            <span
                class="uppercase ml-2 bg-gradient-to-r from-[#0f277e] to-[#0f277e] text-transparent bg-clip-text">support
                ticket</span>
        </a>
        <!-- Add other menu items here following the same structure -->
    </nav>
</aside>
