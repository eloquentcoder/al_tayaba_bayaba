<div class="m-3 md:m-10">

    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="bg-red-500 text-white p-4 rounded-md">
            {{ session('error') }}
        </div>
    @endif

    <div class="mt-10 text-center w-1/3 mx-auto">
        <h5 class="text-xl">JOIN NOW</h5>
        <h3 class="text-5xl">Rental Packages</h3>
        <p>We offer different types of rental packages, which allows you earning along with learning. We are
            offering online classes as well as physical classes around the Globe.</p>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 mt-[50px]">
        @foreach ($plans as $plan)
            <div class="rounded-md bg-white text-[#0f277e] p-5 text-center">
                <h1 class="font-bold text-4xl">{{ $plan->title }}</h1>
                <p class="mn-2 text-2xl">${{ number_format($plan->min_investment_amount) }} - ${{ number_format($plan->max_investment_amount) }}</p>
                <div class="bg-[#0f277e] text-white rounded-md">{{ $plan->min_interest_rate }}% -
                    {{ $plan->max_interest_rate }}% every month</div>
                <p class="text-[#0f277e] mt-3 text-xs">Profit For Every Day</p>

                <div class="my-2">
                    <span>{{ $plan->description }}</span>
                </div>

                <button wire:click="selectPlan({{ $plan }})"
                    class="rounded-full text-white bg-[#0f277e] p-2 w-full flex justify-center items-center gap-1 mt-5">
                    <span>Purchase Now</span>
                </button>
            </div>
        @endforeach
    </div>

    <div class="mt-20 text-center w-1/3 mx-auto">
        <h5 class="text-xl">ANY QUESTIONS</h5>
        <h3 class="text-5xl">We've got answers</h3>
        <p>Certainly! Here are some frequently asked questions about Wealth Guros, your trusted management company. We
            combine human expertise with AI-driven solutions to empower your financial journey. Feel free to explore our
            website and reach out to us for personalized advice and solutions.</p>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-extrabold text-white text-center mb-6">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg p-4 bg-white">
                <button @click="open = !open"
                    class="flex justify-between items-center w-full text-left focus:outline-none">
                    <span class="text-lg font-medium text-gray-800">What is your refund policy?</span>
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 15l-7-7-7 7" />
                    </svg>
                </button>
                <div x-show="open" class="mt-4 text-gray-600">
                    We offer a full refund within 30 days of purchase if you’re not satisfied with our product.
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg p-4 bg-white">
                <button @click="open = !open"
                    class="flex justify-between items-center w-full text-left focus:outline-none">
                    <span class="text-lg font-medium text-gray-800">Do you offer customer support?</span>
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 15l-7-7-7 7" />
                    </svg>
                </button>
                <div x-show="open" class="mt-4 text-gray-600">
                    Yes, we provide 24/7 customer support via email, chat, and phone.
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg p-4 bg-white">
                <button @click="open = !open"
                    class="flex justify-between items-center w-full text-left focus:outline-none">
                    <span class="text-lg font-medium text-gray-800">How do I reset my password?</span>
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 15l-7-7-7 7" />
                    </svg>
                </button>
                <div x-show="open" class="mt-4 text-gray-600">
                    You can reset your password by clicking on the "Forgot Password" link on the login page.
                </div>
            </div>
        </div>
    </div>

    <div id="depositModal"
        class="{{ $isModalOpen && $currentModal == 1 ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-[#0f277e] relative">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">Purchase {{ $selectedPlan ? $selectedPlan->title : null }}</h2>
                <button wire:click="toggleModal" class="text-[#0f277e] hover:text-yellow-600">
                    &times;
                </button>
            </div>
            <p class="text-sm mb-2">Amount Limit: PKR{{ $selectedPlan ? number_format($selectedPlan->min_investment_amount * 278) : 0 }} -
                PKR{{ $selectedPlan ? number_format($selectedPlan->max_investment_amount * 278) : 0 }}</p>
            <p class="text-sm mb-4">Charge: 0.0 $</p>
            <div class="mb-4">
                <label for="amount" class="block text-sm font-bold mb-1">Amount</label>
                <div class="flex items-center bg-black rounded-md">
                    <input id="amount" type="number" placeholder="Enter amount" wire:model="amount"
                        class="w-full p-2 borderfocus:outline-none text-black">
                    <span
                        class="bg-gradient-to-r from-[#0f277e] to-600 text-white font-bold py-2 px-4 rounded-r-md">PKR</span>
                </div>
            @error('amount')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
            </div>
            <button type="button" wire:click="setModal('2')"
                class="w-full bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 text-white rounded-full hover:from-blue-500 hover:to-blue-700">
                NEXT
            </button>
        </div>
    </div>
    {{-- add modal --}}
    <div id="confirmationModal"
        class="{{ $isModalOpen && $currentModal == 2 ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-white relative">
            <div class="flex justify-between items-center mb-4 pb-3 border-b">
                <h2 class="text-lg font-bold text-[#0f277e]">Payment By Local Bank Deposit - PKR</h2>
                <button wire:click="toggleModal" class="text-[#0f277e]">
                    &times;
                </button>
            </div>
            <div>
                <img src="{{ asset('faysal.jpg') }}" alt="Faysal Bank Logo"
                    class="mx-auto h-[100px] w-[100px] border">
            </div>
            <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Amount:</span>
                    <span id="confirmationAmount">{{ $amount }}</span> PKR
                </div>
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Charge:</span>
                    <span id="confirmationAmount">0.00</span> PKR
                </div>
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Conversation Rate:</span>
                    <span id="confirmationAmount">0.00 USD = 278 PKR</span>
                </div>
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span id="confirmationAmount">In USD: {{ number_format(( (int) $amount) / 278) }}</span>
                </div>
            </div>
            <button id="openFinalModalButton" wire:click="setModal('3')"
                class="w-full text-white bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                Deposit Now
            </button>
        </div>
    </div>

    <!-- Final Confirmation Modal -->
    <div id="finalModal"
        class="{{ $isModalOpen && $currentModal == 3 ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-[38rem] text-[#0f277e] relative">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-lg font-bold">Please follow the instructions below</h2>
                    <p class="text-xs">You have requested to deposit {{ $amount }} PKR. Please pay
                        {{ $amount }} PKR for successful payment</p>
                </div>
                <button wire:click="toggleModal" class="text-yellow-400 hover:text-yellow-600">
                    &times;
                </button>
            </div>
            <form wire:submit.prevent="submitPackagePurchase" enctype="multipart/form-data">
                <div>
                    <p class="text-center text-sm mb-4 bg-[#0f277e] text-white rounded-md">PK05FAY394303439493439439
                    </p>
                    <div>
                        <h1 class="text-sm">Please check dollar rate according to google rate</h1>
                        <div class="my-3 flex flex-col">
                            <label for="payment_proof">Payment Proof</label>
                            <input type="file" wire:model="payment_proof" id="payment_proof">
                            @error('payment_proof')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            @if (session()->has('upload_status'))
                                <span class="text-green-500 text-sm">{{ session('upload_status') }}</span>
                            @endif
                            @if ($uploadError)
                                <span class="text-red-500 text-sm">{{ $uploadError }}</span>
                            @endif
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-[#0f277e] to-blue-600 text-white font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                        Deposit
                    </button>
                </div>
            </form>
        </div>
    </div>


</div>
