<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-white">
    <h2 class="text-3xl font-bold text-white mb-6">Transaction</h2>
    
    <div class="flex space-x-4 mb-6">
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
    </div>

    <!-- Transactions Table -->
    <div class="overflow-hidden border border-gray-700 rounded-lg shadow-lg">
        <table class="min-w-full divide-y divide-gray-700">
            <thead class="bg-[#0f277e] text-white">
                <tr>
                    <th class="py-3 px-4 text-left text-sm font-bold">SL. NO.</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">TRANSACTION ID</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">AMOUNT</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">REMARKS</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">TIME</th>
                </tr>
            </thead>
            {{-- <tbody class="divide-y divide-white bg-white text-black">
                <!-- Example Rows -->
                <tr>
                    <td class="py-3 px-4">1</td>
                    <td class="py-3 px-4 text-yellow-500">C2XG4SPSHXYS</td>
                    <td class="py-3 px-4 text-green-400">+0.8 USD</td>
                    <td class="py-3 px-4 text-black">Level 2 Referral bonus From Nyazee</td>
                    <td class="py-3 px-4 text-black">20 Nov 2024 03:30 PM</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-black">2</td>
                    <td class="py-3 px-4 text-yellow-500">TY9M1Y5DO22Y</td>
                    <td class="py-3 px-4 text-green-400">+0.2 USD</td>
                    <td class="py-3 px-4 text-black">Level 1 Referral bonus From Zafarniazi2</td>
                    <td class="py-3 px-4 text-black">20 Nov 2024 03:30 PM</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-black">3</td>
                    <td class="py-3 px-4 text-yellow-500">YM3AHP4MCE1H</td>
                    <td class="py-3 px-4 text-green-400">+1.8 USD</td>
                    <td class="py-3 px-4 text-black">Level 1 Referral bonus From Zafariqbal</td>
                    <td class="py-3 px-4 text-black">20 Nov 2024 02:30 PM</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-black">4</td>
                    <td class="py-3 px-4 text-yellow-500">NT5KN5AGWXZE</td>
                    <td class="py-3 px-4 text-green-400">+117.5 USD</td>
                    <td class="py-3 px-4 text-black">117.5 USD EMR From Platinum Pack (14% to 21% Monthly)</td>
                    <td class="py-3 px-4 text-black">20 Nov 2024 02:30 PM</td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-black">5</td>
                    <td class="py-3 px-4 text-yellow-500">8EB1X7DGW5T6</td>
                    <td class="py-3 px-4 text-green-400">+0.0 USD</td>
                    <td class="py-3 px-4 text-black">Level 2 Referral bonus From Alinawaz</td>
                    <td class="py-3 px-4 text-black">20 Nov 2024 05:31 AM</td>
                </tr>
            </tbody> --}}
        </table>
    </div>
</div>