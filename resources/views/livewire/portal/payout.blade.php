<div class="p-5">
    <h1 class="text-5xl">Withdraw Money</h1>

    <div class="w-full mx-auto mt-5">
        <div class="flex space-x-4 items-center">
            <!-- QR Code Card -->
            <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                <div class="bg-white p-2 rounded-lg">
                    <img src="{{ asset('T-icon.png') }}" alt="QR Code" class="mx-auto h-[100px] w-[100px]">
                </div>
                <button class="mt-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    WITHDRAW NOW
                </button>
            </div>
        
            <!-- Faysal Bank Card -->
            <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                <div class="bg-white p-2 rounded-lg">
                    <img src="{{ asset('home-icon.png') }}" alt="Faysal Bank Logo" class="mx-auto h-[100px] w-[100px]">
                </div>
                <button id="openModalButton" class="mt-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    WITHDRAW NOW
                </button>
            </div>
        </div>
        
    </div>

        {{-- deposit modal --}}

        <div id="withdrawBankModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-[#0f277e] relative">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold">Withdraw By Bank/Wire Transfer</h2>
                    <button id="closeModalButton" class="text-[#0f277e] hover:text-yellow-600">
                        &times;
                    </button>
                </div>
                <p class="text-sm mb-2">Transaction Limit: 100.0 - 10,000,000.0 $</p>
                <p class="text-sm mb-4">Charge: 0.0 $</p>
                <div class="mb-4">
                    <label for="wallet" class="block text-sm font-bold mb-1">Select Wallet</label>
                    <div class="flex items-center bg-black rounded-md">
                        <select id="wallet" type="number" class="w-full p-2 border text-[#0f277e] focus:outline-none">
                            <option value="">-- Select Wallet --</option>
                            <option value="">Deposit Wallet - $0</option>
                            <option value="">EMR Wallet - $0</option>
                            <option value="">EMR Share Wallet - $0</option>
                        </select>
                    </div>
                </div>
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

</div>

<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const withdrawBankModal = document.getElementById('withdrawBankModal');

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
        withdrawBankModal.classList.remove('hidden');
    });

    // Close deposit modal
    closeModalButton.addEventListener('click', () => {
        withdrawBankModal.classList.add('hidden');
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