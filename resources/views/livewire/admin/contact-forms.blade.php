<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-white">
    <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold text-white mb-6">Contact Form Entries</h2>
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
                        <th class="py-3 px-4 text-left text-sm font-bold">Full Name</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Email</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Phone Number</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white bg-white text-black">
                    @foreach ($contacts_form_entries as $key => $entry)
                        <tr>
                            <td class="py-3 px-4">{{ $key + 1 }}</td>
                            <td class="py-3 px-4 text-black">
                                {{ $entry->name }}</td>
                            <td class="py-3 px-4 text-black">{{ $entry->email }}</td>
                            <td class="py-3 px-4 text-black">{{ $entry->phone_number }}</td>
                            <td class="py-3 px-4 text-black">
                                <svg wire:click="selectContact({{ $entry }})" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{ $contacts_form_entries->links('pagination::tailwind') }}


            </table>
        </div>
    </div>


    <div id="viewFormModal"
        class="{{ $select_contact_form ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-white relative">

            <div class="flex justify-between items-center mb-4 pb-3 border-b">
                <h2 class="text-lg font-bold text-[#0f277e]">Contact Form Details</h2>
                <button id="closeConfirmationModalButton" class="text-[#0f277e]" wire:click="removeForm()">
                    &times;
                </button>
            </div>

            <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Name:</span>
                    <span id="confirmationAmount">{{ $select_contact_form ? $select_contact_form->name : '' }}</span>
                </div>
            </div>

            <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Phone Number:</span>
                    <span
                        id="confirmationAmount">{{ $select_contact_form ? $select_contact_form->phone_number : '' }}</span>
                </div>
            </div>

            <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Email Address:</span>
                    <span id="confirmationAmount">{{ $select_contact_form ? $select_contact_form->email : '' }}</span>
                </div>
            </div>

            <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Message:</span>
                    <span
                        id="confirmationAmount">{{ $select_contact_form ? $select_contact_form->message : '' }}</span>
                </div>
            </div>


            <div>
                <textarea wire:model="contact_form_reply" class="w-full border border-blue-950 text-blue-950 p-2" cols="30"
                    rows="10">
                </textarea>
                @if (session()->has('error'))
                    <span class="text-red-500"> {{ session('error') }}</span>
                @endif
                <button wire:click="replyContactForm"
                    class="w-full text-white bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    Reply
                </button>
            </div>

            {{-- <div>

                <img src="{{ $selectedDeposit->payment_proof_url ?? '' }}" alt="Faysal Bank Logo"
                    class="mx-auto h-[300px] w-[300px] border">
            </div>
            <div class="my-4 space-y-1">
                <div class="text-lg text-center space-x-2 text-[#0f277e]">
                    <span>Amount:</span>
                    <span id="confirmationAmount">{{ $selectedDeposit ? $selectedDeposit->amount : '0.00' }}</span> USD
                </div>
            </div>
            <div class="flex gap-2">
                <button wire:click="rejectDeposit"
                    class="w-full text-white bg-gradient-to-r from-red-400 to-red-600 font-bold py-2 px-4 rounded-full hover:from-red-500 hover:to-red-700">
                    Reject
                </button>
                <button wire:click="acceptDeposit"
                    class="w-full text-white bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    Confirm
                </button>
            </div> --}}

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
    const openCreateDepositModalButton = document.getElementB);
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
