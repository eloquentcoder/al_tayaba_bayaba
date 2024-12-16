<div class="p-5">
    <h1 class="text-5xl">Withdraw Money</h1>

    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif


    <div class="w-full mx-auto mt-5">
        <div class="flex space-x-4 items-center">

            <!-- Faysal Bank Card -->
            <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                <div class="bg-white p-2 rounded-lg">
                    <img src="{{ asset('home-icon.png') }}" alt="Faysal Bank Logo" class="mx-auto h-[100px] w-[100px]">
                </div>
                <button wire:click="toggleModal"
                    class="mt-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    WITHDRAW NOW
                </button>
            </div>
        </div>

    </div>

    {{-- deposit modal --}}

    <div
        class="{{ $isModalOpen && $currentModal == 1 ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50  justify-center items-center z-50">
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
                    <select id="wallet" wire:model="selected_wallet" type="number"
                        class="w-full p-2 border text-[#0f277e] focus:outline-none">
                        <option value="">-- Select Wallet --</option>
                        <option value="sales_bonus_balance">Referral Wallet
                            -${{ auth()->user()->balance->sales_bonus_balance }}</option>

                        @if ($is_withdrawal_day)
                            <option value="emr_balance">Rental Wallet - ${{ auth()->user()->balance->emr_balance }}
                            </option>
                            <option value="emr_share_balance">Rental Profit Wallet -
                                ${{ auth()->user()->balance->emr_share_balance }}</option>
                        @endif


                    </select>
                </div>
                @error('selected_wallet')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-sm font-bold mb-1">Amount</label>
                <div class="flex items-center bg-black rounded-md">
                    <input wire:model="amount" type="number" placeholder="Enter amount"
                        class="w-full p-2 border text-black focus:outline-none">
                    <span
                        class="bg-gradient-to-r from-[#0f277e] to-600 text-white font-bold py-2 px-4 rounded-r-md">USD</span>
                </div>
                @error('amount')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <button wire:click="requestWithdrawal"
                class="w-full bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 text-white rounded-full hover:from-blue-500 hover:to-blue-700">
                <span wire:loading.remove>NEXT</span>
                <span wire:loading>Loading...</span>
            </button>
        </div>
    </div>

</div>

{{-- <script>
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
</script> --}}
