<div class="p-5">
    <h1 class="text-5xl">Deposit History</h1>

    <div class="overflow-hidden border border-gray-700 rounded-lg shadow-lg mt-5">
        <table class="min-w-full divide-y divide-gray-700">
            <thead class="bg-[#0f277e] text-white">
                <tr>
                    <th class="py-3 px-4 text-left text-sm font-bold">S/N.</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">DEPOSIT ID</th>
                    {{-- <th class="py-3 px-4 text-left text-sm font-bold">USER</th> --}}
                    <th class="py-3 px-4 text-left text-sm font-bold">AMOUNT</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">STATUS</th>
                    <th class="py-3 px-4 text-left text-sm font-bold">TIME</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white bg-white text-black">
                @foreach ($deposits as $key => $deposit)
                    <tr>
                        <td class="py-3 px-4">{{ $key + 1 }}</td>
                        <td class="py-3 px-4 text-black">{{ $deposit->unique_id }}</td>
                        {{-- <td class="py-3 px-4 text-black">{{ $deposit->user->full_name }}</td> --}}
                        <td class="py-3 px-4 text-black">{{ $deposit->amount }}</td>
                        <td class="py-3 px-4 text-black">{{ $deposit->status }}</td>
                        <td class="py-3 px-4 text-black">{{ $deposit->created_at->format('d F, Y h:i A') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $deposits->links('pagination::tailwind') }}
    </div>

</div>
