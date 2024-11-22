<div class="m-10">

    <div class="mt-10 text-center w-1/3 mx-auto">
        <h5 class="text-xl">JOIN NOW</h5>
        <h3 class="text-5xl">Educational Packages</h3>
        <p>We offer three different types of educational packages, which allows you earning along with learning. We are
            offering online classes as well as physical classes around the Globe.</p>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 mt-[50px]">

        @foreach ($plans as $plan)
        <div class="rounded-md bg-white text-[#0f277e] p-5 text-center">
            <h1 class="font-bold text-4xl">{{ $plan->title }}</h1>
            <p class="mn-2 text-2xl">${{ $plan->min_investment_amount }} - ${{ $plan->max_investment_amount }}</p>
            <div class="bg-[#0f277e] text-white rounded-md">{{ $plan->min_interest_rate }}% - {{ $plan->max_investment_rate }}% every month</div>
            <p class="text-[#0f277e] mt-3 text-xs">Profit For Every Day</p>

            <div class="my-2">
                <span>{{ $plan->description }}</span>
            </div>

            <a class="rounded-full text-white bg-[#0f277e] p-2 w-full flex justify-center items-center gap-1 mt-5">
                <span>Purchase Now</span>
            </a>

        </div>
        @endforeach


       

    </div>

    <div class="mt-20 text-center w-1/3 mx-auto">
        <h5 class="text-xl">ANY QUESTIONS</h5>
        <h3 class="text-5xl">We've got answers</h3>
        <p>Certainly! Here are some frequently asked questions about Wealth Guros, your trusted management company. We combine human expertise with AI-driven solutions to empower your financial journey. Feel free to explore our website and reach out to us for personalized advice and solutions.</p>
    </div>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-extrabold text-white text-center mb-6">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg p-4 bg-white">
                <button 
                    @click="open = !open" 
                    class="flex justify-between items-center w-full text-left focus:outline-none">
                    <span class="text-lg font-medium text-gray-800">What is your refund policy?</span>
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 15l-7-7-7 7" />
                    </svg>
                </button>
                <div x-show="open" class="mt-4 text-gray-600">
                    We offer a full refund within 30 days of purchase if you’re not satisfied with our product.
                </div>
            </div>
    
            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg p-4 bg-white">
                <button 
                    @click="open = !open" 
                    class="flex justify-between items-center w-full text-left focus:outline-none">
                    <span class="text-lg font-medium text-gray-800">Do you offer customer support?</span>
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 15l-7-7-7 7" />
                    </svg>
                </button>
                <div x-show="open" class="mt-4 text-gray-600">
                    Yes, we provide 24/7 customer support via email, chat, and phone.
                </div>
            </div>
    
            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg p-4 bg-white">
                <button 
                    @click="open = !open" 
                    class="flex justify-between items-center w-full text-left focus:outline-none">
                    <span class="text-lg font-medium text-gray-800">How do I reset my password?</span>
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 15l-7-7-7 7" />
                    </svg>
                </button>
                <div x-show="open" class="mt-4 text-gray-600">
                    You can reset your password by clicking on the "Forgot Password" link on the login page.
                </div>
            </div>
        </div>
    </div>



</div>
