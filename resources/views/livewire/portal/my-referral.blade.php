<div class="m-10">
    <h1 class="text-5xl">My Referral</h1>

    <div class="bg-white p-5">
        <h1 class="text-[#0f277e] text-xl font-bold mb-3">My Referral Link</h1>
        <div class="bg-neutral-900 rounded-lg p-4 flex items-center justify-between">
            <code id="link" class="text-neutral-400">{{ auth()->user()->referral_link }}</code>
            <button
                class="flex items-center gap-2 bg-[#0f277e]/20 hover:bg-[#0f277e]/30 text-white px-4 py-2 rounded-lg transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                </svg>
                <span id="copyButton">COPY LINK</span>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4 mt-10" x-data="{ activeTab: 'level1' }">

        <div class="flex flex-col">

            <button x-on:click="activeTab = 'level1'" :class="{ 'bg-[#0f277e]': activeTab === 'level1' }"
                class="px-8 py-2 hover:bg-[#0f277e] focus:outline-none flex flex-col rounded-md text-center items-center border-2 border-[#0f277e]">
                <span>Level 1</span>
                <span>0</span>
            </button>
            <div class="h-5 w-px bg-gray-400 mx-auto"></div>
            <button x-on:click="activeTab = 'level3'" :class="{ 'bg-[#0f277e]': activeTab === 'level2' }"
                class="px-8 py-2 hover:bg-[#0f277e] focus:outline-none flex flex-col rounded-md text-center items-center border-2 border-[#0f277e]">
                <span>Level 2</span>
                <span>0</span>
            </button>
            <div class="h-5 w-px bg-gray-400 mx-auto"></div>
            <button x-on:click="activeTab = 'level3'" :class="{ 'bg-[#0f277e]': activeTab === 'level2' }"
                class="px-8 py-2 hover:bg-[#0f277e] focus:outline-none flex flex-col rounded-md text-center items-center border-2 border-[#0f277e]">
                <span>Level 3</span>
                <span>0</span>
            </button>
            <div class="h-5 w-px bg-gray-400 mx-auto"></div>
            <button x-on:click="activeTab = 'level4'" :class="{ 'bg-[#0f277e]': activeTab === 'level2' }"
                class="px-8 py-2 hover:bg-[#0f277e] focus:outline-none flex flex-col rounded-md text-center items-center border-2 border-[#0f277e]">
                <span>Level 4</span>
                <span>0</span>
            </button>
        </div>

        <div class=" text-gray-200 col-span-3">
            <div x-show="activeTab === 'level1'">
                <div class="bg-white flex items-center justify-center">
                    <div class="w-full max-w-4xl bg-white text-black shadow-md overflow-hidden">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-[#0f277e] text-white">
                                    <th class="px-4 py-2 text-left">USERNAME</th>
                                    <th class="px-4 py-2 text-left">EMAIL</th>
                                    <th class="px-4 py-2 text-left">JOINED AT</th>
                                </tr>
                            </thead>
                            <tbody class="text-[#0f277e]">
                                <!-- Row 1 -->
                                @foreach ($level_1_referrals as $referral)
                                    <tr class="border-b border-gray-700">
                                        <td class="px-4 py-2">{{ $referral->username }}</td>
                                        <td class="px-4 py-2">{{ $referral->email }}</td>
                                        <td class="px-4 py-2">{{ $referral->created_at->format('d F, Y h:i A') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'level2'">
                <div class="bg-white flex items-center justify-center">
                    <div class="w-full max-w-4xl bg-white text-black shadow-md overflow-hidden">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-[#0f277e] text-white">
                                    <th class="px-4 py-2 text-left">USERNAME</th>
                                    <th class="px-4 py-2 text-left">EMAIL</th>
                                    <th class="px-4 py-2 text-left">JOINED AT</th>
                                </tr>
                            </thead>
                            <tbody class="text-[#0f277e]">
                                <!-- Row 1 -->
                                @foreach ($level_2_referrals as $referral)
                                    <tr class="border-b border-gray-700">
                                        <td class="px-4 py-2">{{ $referral->username }}</td>
                                        <td class="px-4 py-2">{{ $referral->email }}</td>
                                        <td class="px-4 py-2">{{ $referral->created_at->format('d F, Y h:i A') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'level3'">
                <div class="bg-white flex items-center justify-center">
                    <div class="w-full max-w-4xl bg-white text-black shadow-md overflow-hidden">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-[#0f277e] text-white">
                                    <th class="px-4 py-2 text-left">USERNAME</th>
                                    <th class="px-4 py-2 text-left">EMAIL</th>
                                    <th class="px-4 py-2 text-left">JOINED AT</th>
                                </tr>
                            </thead>
                            <tbody class="text-[#0f277e]">
                                @foreach ($level_3_referrals as $referral)
                                <tr class="border-b border-gray-700">
                                    <td class="px-4 py-2">{{ $referral->username }}</td>
                                    <td class="px-4 py-2">{{ $referral->email }}</td>
                                    <td class="px-4 py-2">{{ $referral->created_at->format('d F, Y h:i A') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'level4'">
                <div class="bg-white flex items-center justify-center">
                    <div class="w-full max-w-4xl bg-white text-black shadow-md overflow-hidden">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-[#0f277e] text-white">
                                    <th class="px-4 py-2 text-left">USERNAME</th>
                                    <th class="px-4 py-2 text-left">EMAIL</th>
                                    <th class="px-4 py-2 text-left">JOINED AT</th>
                                </tr>
                            </thead>
                            <tbody class="text-[#0f277e]">
                                <!-- Row 1 -->
                                @foreach ($level_4_referrals as $referral)
                                <tr class="border-b border-gray-700">
                                    <td class="px-4 py-2">{{ $referral->username }}</td>
                                    <td class="px-4 py-2">{{ $referral->email }}</td>
                                    <td class="px-4 py-2">{{ $referral->created_at->format('d F, Y h:i A') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    document.getElementById('copyButton').addEventListener('click', function() {
        // Get the referral link text
        const referralLink = document.getElementById('link').innerText;

        // Copy to clipboard
        navigator.clipboard.writeText(referralLink).then(() => {
            alert('Referral link copied to clipboard!');
        }).catch(err => {
            console.error('Failed to copy text: ', err);
        });
    });
</script>
