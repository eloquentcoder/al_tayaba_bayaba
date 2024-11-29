<div>
    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Whoops! Something went wrong.</strong>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-full mx-auto mt-5">
        <div class="flex space-x-4 items-center">
            <!-- QR Code Card -->
            <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                <div class="bg-white p-2 rounded-lg">
                    <img src="{{ asset('qr_code.svg') }}" alt="QR Code" class="mx-auto h-[100px] w-[100px]">
                </div>
                <button
                    class="mt-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    DEPOSIT NOW
                </button>
            </div>

            <!-- Faysal Bank Card -->
            <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                <div class="bg-white p-2 rounded-lg">
                    <img src="{{ asset('faysal.jpg') }}" alt="Faysal Bank Logo" class="mx-auto h-[100px] w-[100px]">
                </div>
                <button wire:click="toggleModal" class="mt-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    DEPOSIT NOW
                </button>
            </div>
        </div>

    </div>

    {{-- deposit modal --}}

    

    <div id="depositModal" class="{{ $isModalOpen && $currentModal == 1 ? "flex" : "hidden" }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-[#0f277e] relative">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">Payment By Local Bank Deposit - PKR</h2>
                <button wire:click="toggleModal" class="text-[#0f277e] hover:text-yellow-600">
                    &times;
                </button>
            </div>
            <p class="text-sm mb-2">Transaction Limit: 100.0 - 10,000,000.0 $</p>
            <p class="text-sm mb-4">Charge: 0.0 $</p>
            <div class="mb-4">
                <label for="amount" class="block text-sm font-bold mb-1">Amount</label>
                <div class="flex items-center bg-black rounded-md">
                    <input id="amount" type="number" placeholder="Enter amount" wire:model="amount"
                        class="w-full p-2 borderfocus:outline-none text-black">
                    <span
                        class="bg-gradient-to-r from-[#0f277e] to-600 text-white font-bold py-2 px-4 rounded-r-md">USD</span>
                </div>
            </div>
            <button type="button" wire:click="setModal('2')"
                class="w-full bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 text-white rounded-full hover:from-blue-500 hover:to-blue-700">
                NEXT
            </button>
        </div>
    </div>

    {{-- add modal --}}
    <div id="confirmationModal" class="{{ $isModalOpen && $currentModal == 2 ? "flex" : "hidden" }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-white relative">
            <div class="flex justify-between items-center mb-4 pb-3 border-b">
                <h2 class="text-lg font-bold text-[#0f277e]">Payment By Local Bank Deposit - PKR</h2>
                <button wire:click="toggleModal" class="text-[#0f277e]">
                    &times;
                </button>
            </div>
            <div>
                <img src="{{ asset('faysal.jpg') }}" alt="Faysal Bank Logo" class="mx-auto h-[100px] w-[100px] border">
            </div>
            <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Amount:</span>
                    <span id="confirmationAmount">{{$amount}}</span> USD
                </div>
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Charge:</span>
                    <span id="confirmationAmount">0.00</span> USD
                </div>
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Conversation Rate:</span>
                    <span id="confirmationAmount">0.00 USD = 278 PKR</span>
                </div>
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span id="confirmationAmount">In PKR: {{ $amount * 278 }}</span>
                </div>
            </div>
            <button id="openFinalModalButton" wire:click="setModal('3')"
                class="w-full text-white bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                Deposit Now
            </button>
        </div>
    </div>

    <!-- Final Confirmation Modal -->
    <div id="finalModal" class="{{ $isModalOpen && $currentModal == 3 ? "flex" : "hidden" }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-[38rem] text-[#0f277e] relative">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-lg font-bold">Please follow the instructions below</h2>
                    <p class="text-xs">You have requested to deposit {{ $amount }} USD. Please pay {{ $amount * 278 }} PKR for successful
                        payment</p>
                </div>
                <button wire:click="toggleModal" class="text-yellow-400 hover:text-yellow-600">
                    &times;
                </button>
            </div>
            <div>
                <p class="text-center text-sm mb-4 bg-[#0f277e] text-white rounded-md">PK05FAY394303439493439439</p>
                <div>
                    <h1 class="text-sm">Please check dollar rate according to google rate</h1>
                    <div class="my-3 flex flex-col">
                        <label id="payment_proof">Payment Proof</label>
                        <input type="file" wire:model="payment_proof" id="payment_proof">
                    </div>
                </div>
                <button wire:click="submitDeposit"
                    class="w-full bg-gradient-to-r from-[#0f277e] to-blue-600 text-white font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    Deposit
                </button>
            </div>
        </div>
    </div>

</div>

