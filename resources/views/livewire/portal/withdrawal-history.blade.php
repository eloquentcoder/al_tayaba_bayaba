<div class="p-5">
    <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold text-white mb-6">Withdrawal History</h2>
    </div>

    <div class="mt-10">

        <div class="overflow-hidden border border-gray-700 rounded-lg shadow-lg">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-[#0f277e] text-white">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-bold">SL. NO.</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Amount</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white bg-white text-black">
                    @foreach ($withdrawals as $key => $withdrawal)
                        <tr>
                            <td class="py-3 px-4">{{ $key + 1 }}</td>
                            <td class="py-3 px-4 text-black">{{ $withdrawal->amount }}</td>
                            <td class="py-3 px-4 text-black">{{ $withdrawal->plan->title }}</td>
                            <td class="py-3 px-4 text-black">{{ $withdrawal->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
                {{ $withdrawals->links('pagination::tailwind') }}


            </table>
        </div>
    </div>
</div>
