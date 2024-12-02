<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-white">
    <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold text-white mb-6">Package Purchase History</h2>
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
                        <th class="py-3 px-4 text-left text-sm font-bold">Amount</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Package</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white bg-white text-black">
                    @foreach ($purchase_histories as $key => $subscription)
                        <tr>
                            <td class="py-3 px-4">{{ $key + 1 }}</td>
                            <td class="py-3 px-4 text-black">{{ $subscription->amount }}</td>
                            <td class="py-3 px-4 text-black">{{ $subscription->plan->title }}</td>
                            <td class="py-3 px-4 text-black">{{ $subscription->status }}</td>
                           
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{ $purchase_histories->links('pagination::tailwind') }}


            </table>
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
