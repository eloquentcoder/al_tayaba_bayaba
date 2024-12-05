<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-white">
    <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold text-white mb-6">Withdrawal Requests</h2>
    </div>

    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif


    <div class="mt-10">

        <div class="overflow-hidden border border-gray-700 rounded-lg shadow-lg">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-[#0f277e] text-white">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-bold">SL. NO.</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">User</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Email</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Amount</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Status</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white bg-white text-black">
                    @foreach ($withdrawals as $key => $withdrawal)
                        <tr>
                            <td class="py-3 px-4">{{ $key + 1 }}</td>
                            <td class="py-3 px-4 text-black">
                                {{ $withdrawal->user->first_name . ' ' . $withdrawal->user->last_name }}</td>
                            <td class="py-3 px-4 text-black">{{ $withdrawal->user->email }}</td>
                            <td class="py-3 px-4 text-black">{{ $withdrawal->amount }}</td>
                            <td class="py-3 px-4 text-black">{{ $withdrawal->plan->title }}</td>
                            <td class="py-3 px-4 text-black">{{ $withdrawal->status }}</td>
                            <td class="py-3 px-4 text-black">
                                <svg wire:click="selectWithdrawal({{ $withdrawal }})"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{ $withdrawals->links('pagination::tailwind') }}


            </table>
        </div>
    </div>


    <div 
        class="{{ $selectedWithdrawal ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-white relative">

            <div class="flex justify-between items-center mb-4 pb-3 border-b">
                <h2 class="text-lg font-bold text-[#0f277e]">Withdrawal Confirmation</h2>
                <button id="closeConfirmationModalButton" class="text-[#0f277e]" wire:click="removewithdrawal()">
                    &times;
                </button>
            </div>
            <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Amount:</span>
                    <span id="confirmationAmount">{{ $selectedWithdrawal ? $selectedWithdrawal->amount : '0.00' }}</span> USD
                </div>
            </div>
            <div class="flex gap-2">
                <button wire:click="rejectWithdrawal"
                    class="w-full text-white bg-gradient-to-r from-red-400 to-red-600 font-bold py-2 px-4 rounded-full hover:from-red-500 hover:to-red-700">
                    Reject
                </button>
                <button wire:click="acceptWithdrawal"
                    class="w-full text-white bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    Confirm
                </button>
            </div>

        </div>
    </div>

</div>

<!-- JavaScript -->
{{-- <script>
    document.addEventListener('livewire:load', () => {
        Livewire.on('closeModal', () => {
            createDepositModal.classList.add('hidden');
            createDepositModal.classList.remove('flex');
        });
    });
</script>
<script>
    const openCreateDepositModalButton = document.getElementById('openDepositModalButton');
    const closeCreateDepositModalButton = document.getElementById('closeCreateDepositModalButton');
    const createDepositModal = document.getElementById('createDepositModal');

    // Open deposit modal
    openCreateDepositModalButton.addEventListener('click', () => {
        createDepositModal.classList.remove('hidden');
        createDepositModal.classList.add('flex');
    });

    // Close deposit modal
    closeCreateDepositModalButton.addEventListener('click', () => {
        createDepositModal.classList.add('hidden');
        createDepositModal.classList.remove('flex');
    });
</script> --}}
