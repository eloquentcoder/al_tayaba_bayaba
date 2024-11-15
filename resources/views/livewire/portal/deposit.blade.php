<div class="p-5">
    <h1 class="text-5xl">Deposit Money</h1>
  
    <div class="w-full mx-auto mt-5">
        <div class="flex space-x-4 items-center">
            <!-- QR Code Card -->
            <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                <div class="bg-white p-2 rounded-lg">
                    <img src="{{ asset('qr_code.svg') }}" alt="QR Code" class="mx-auto h-[100px] w-[100px]">
                </div>
                <button class="mt-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    DEPOSIT NOW
                </button>
            </div>
        
            <!-- Faysal Bank Card -->
            <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                <div class="bg-white p-2 rounded-lg">
                    <img src="{{ asset('faysal.jpg') }}" alt="Faysal Bank Logo" class="mx-auto h-[100px] w-[100px]">
                </div>
                <button id="openModalButton" class="mt-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    DEPOSIT NOW
                </button>
            </div>
        </div>
        
    </div>

    {{-- deposit modal --}}

    <div id="depositModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-[#0f277e] relative">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">Payment By Local Bank Deposit - PKR</h2>
                <button id="closeModalButton" class="text-[#0f277e] hover:text-yellow-600">
                    &times;
                </button>
            </div>
            <p class="text-sm mb-2">Transaction Limit: 100.0 - 10,000,000.0 $</p>
            <p class="text-sm mb-4">Charge: 0.0 $</p>
            <div class="mb-4">
                <label for="amount" class="block text-sm font-bold mb-1">Amount</label>
                <div class="flex items-center bg-black rounded-md">
                    <input id="amount" type="number" placeholder="Enter amount" class="w-full p-2 border text-white focus:outline-none">
                    <span class="bg-gradient-to-r from-[#0f277e] to-600 text-white font-bold py-2 px-4 rounded-r-md">USD</span>
                </div>
            </div>
            <button id="openConfirmationModalButton" class="w-full bg-gradient-to-r from-[#0f277e] to-blue-600 text-black font-bold py-2 px-4 text-white rounded-full hover:from-blue-500 hover:to-blue-700">
                NEXT
            </button>
        </div>
    </div>

    {{-- add modal --}}
    <div id="confirmationModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-white relative">
            <div class="flex justify-between items-center mb-4 pb-3 border-b">
                <h2 class="text-lg font-bold text-[#0f277e]">Payment By Local Bank Deposit - PKR</h2>
                <button id="closeConfirmationModalButton" class="text-[#0f277e]">
                    &times;
                </button>
            </div>
            <div>
                <img src="{{ asset('faysal.jpg') }}" alt="Faysal Bank Logo" class="mx-auto h-[100px] w-[100px] border">
            </div>
           <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Amount:</span>
                    <span id="confirmationAmount">0.00</span> USD
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
                    <span id="confirmationAmount">In PKR: 155,402.0</span>
                </div>
           </div>
            <button id="openFinalModalButton" class="w-full text-white bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                Deposit Now
            </button>
        </div>
    </div>

    <!-- Final Confirmation Modal -->
    <div id="finalModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-[38rem] text-[#0f277e] relative">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-lg font-bold">Please follow the instructions below</h2>
                    <p class="text-xs">You have requested to deposit 559 USD. Please pay 155402 PKR for successful payment</p>
                </div>
                <button id="closeFinalModalButton" class="text-yellow-400 hover:text-yellow-600">
                    &times;
                </button>
            </div>
           <div>
            <p class="text-center text-sm mb-4 bg-[#0f277e] text-white rounded-md">PK05FAY394303439493439439</p>
            <div >
                <h1 class="text-sm">Please check dollar rate according to google rate</h1>
                <div class="my-3 flex flex-col">
                    <label id="payment_proof">Payment Proof</label>
                    <input type="file" name="" id="payment_proof">
                </div>
            </div>
            <button id="closeFinalModalButton" class="w-full bg-gradient-to-r from-[#0f277e] to-blue-600 text-white font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                Deposit
            </button>
           </div>
        </div>
    </div>

</div>

<!-- JavaScript -->
<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const depositModal = document.getElementById('depositModal');

    const openConfirmationModalButton = document.getElementById('openConfirmationModalButton');
    const confirmationModal = document.getElementById('confirmationModal');
    const closeConfirmationModalButton = document.getElementById('closeConfirmationModalButton');

    const openFinalModalButton = document.getElementById('openFinalModalButton');
    const finalModal = document.getElementById('finalModal');
    const closeFinalModalButton = document.querySelectorAll('#closeFinalModalButton');

    const confirmationAmount = document.getElementById('confirmationAmount');
    const amountInput = document.getElementById('amount');

    // Open deposit modal
    openModalButton.addEventListener('click', () => {
        depositModal.classList.remove('hidden');
    });

    // Close deposit modal
    closeModalButton.addEventListener('click', () => {
        depositModal.classList.add('hidden');
    });

    // Open confirmation modal
    openConfirmationModalButton.addEventListener('click', () => {
        const amount = amountInput.value || "0.00";
        confirmationAmount.textContent = parseFloat(amount).toFixed(2);
        depositModal.classList.add('hidden');
        confirmationModal.classList.remove('hidden');
    });

    // Close confirmation modal
    closeConfirmationModalButton.addEventListener('click', () => {
        confirmationModal.classList.add('hidden');
    });

    // Open final confirmation modal
    openFinalModalButton.addEventListener('click', () => {
        confirmationModal.classList.add('hidden');
        finalModal.classList.remove('hidden');
    });

    // Close final confirmation modal
    closeFinalModalButton.forEach(button => {
        button.addEventListener('click', () => {
            finalModal.classList.add('hidden');
        });
    });
</script>