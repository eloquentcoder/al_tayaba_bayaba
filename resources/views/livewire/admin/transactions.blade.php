<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-white">
    <h2 class="text-3xl font-bold text-white mb-6">Transactions</h2>
    
    {{-- <div class="flex space-x-4 mb-6">
        <!-- Search Input -->
        <div class="relative flex-1">
            <input type="text" placeholder="SEARCH FOR TRANSACTION ID" class="w-full bg-white text-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" />
        </div>
        
        <!-- Remark Input -->
        <div class="relative flex-1">
            <input type="text" placeholder="REMARK" class="w-full bg-white text-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" />
        </div>
        
        <!-- Date Picker -->
        <div class="relative flex-1">
            <input type="date" class="w-full bg-white text-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" />
        </div>

        <!-- Search Button -->
        <button class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-6 py-2 rounded-md text-black font-bold hover:from-yellow-600 hover:to-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            Search
        </button>
    </div> --}}

    <!-- Transactions Table -->
    <div class="overflow-hidden border border-gray-700 rounded-lg shadow-lg">
        <table class="min-w-full divide-y divide-gray-700">
            <thead class="bg-[#0f277e] text-white">
                <tr>
                    <th class="py-3 px-4 text-left text-sm font-bold">SL. NO.</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">TRANSACTION ID</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">AMOUNT</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">TRANSACTION TYPE</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">TIME</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white bg-white text-black">
             @foreach ($transactions as $key => $transaction)
             <tr>
                <td class="py-3 px-4 text-black">{{ $key+1 }}</td>
                <td class="py-3 px-4 text-black">{{ $transaction->unique_id }}</td>
                <td class="py-3 px-4 text-black">{{ $transaction->amount }}</td>
                <td class="py-3 px-4 text-black">{{ $transaction->formatted_type }}</td>
                <td class="py-3 px-4 text-black">20 Nov 2024 05:31 AM</td>
            </tr>
             @endforeach
            </tbody>
        </table>
    </div>
</div>