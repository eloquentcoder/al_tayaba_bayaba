<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-white">
    <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold text-white mb-6">Plans</h2>
        <button id="openCreatePlanModalButton"
            class="bg-[#0f277e] px-6 py-2 rounded-md text-white font-bold hover:from-yellow-600 hover:to-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            Create Plan
        </button>
    </div>

    
    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif


    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 mt-10">
        @foreach ($plans as $plan)
            <x-dashboard.plans-card :title="$plan->title" :description="$plan->description" :min_amount="$plan->min_investment_amount" :max_amount="$plan->max_investment_amount"
                :min_interest_rate="$plan->min_interest_rate" :max_interest_rate="$plan->max_interest_rate" :to_purchase="false" :to_delete="true" :plan_id="$plan->id" />
        @endforeach
    </div>


    <div id="createPlanModal"
        class="{{ $errors->any() ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-white relative">
            <div class="flex justify-between items-center mb-4 pb-3 border-b">
                <h2 class="text-lg font-bold text-[#0f277e]">Create Plan</h2>
                <button id="closeCreatePlanModalButton" class="text-[#0f277e]">
                    &times;
                </button>
            </div>
            <form wire:submit.prevent="createPlan">
                <div class="my-4 grid grid-cols-2 gap-2">
                    <div class="mb-4 col-span-2">
                        <label for="title" class="block text-black text-sm font-bold mb-1">Title</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="title" type="text" placeholder="Enter title" wire:model="title"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('title')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 col-span-2">
                        <label for="description" class="block text-black text-sm font-bold mb-1">Description</label>
                        <div class="flex items-center bg-black rounded-md">
                            <textarea id="description" type="text" placeholder="Enter description" wire:model="description"
                                class="w-full p-2 border text-black focus:outline-none"></textarea>
                        </div>
                        @error('description')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="min_amount" class="block text-black text-sm font-bold mb-1">Min Amount</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="min_amount" type="number" placeholder="Enter minimum investment amount"
                                wire:model="min_amount" class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('min_amount')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="max_amount" class="block text-black text-sm font-bold mb-1">Max Amount</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="max_amount" type="number" placeholder="Enter maximum investment amount"
                                wire:model="max_amount" class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('max_amount')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="min_interest_rate" class="block text-black text-sm font-bold mb-1">Min Interest
                            Rate</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="min_interest_rate" type="number" placeholder="Enter minimum investment amount"
                                wire:model="min_interest_rate"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('min_interest_rate')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="max_interest_rate" class="block text-black text-sm font-bold mb-1">Max Interest
                            Rate</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="max_interest_rate" type="number" placeholder="Enter maximum investment amount"
                                wire:model="max_interest_rate"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('max_interest_rate')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="w-full text-white bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    Create
                </button>
            </form>
        </div>
    </div>

    <div id="updatePlanModal"
        class="{{ $planToUpdate ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-white relative">
            <div class="flex justify-between items-center mb-4 pb-3 border-b">
                <h2 class="text-lg font-bold text-[#0f277e]">Update Plan</h2>
                <button class="text-[#0f277e]">
                    &times;
                </button>
            </div>
            <form wire:submit.prevent="updatePackage">
                <div class="my-4 grid grid-cols-2 gap-2">
                    <div class="mb-4 col-span-2">
                        <label for="title" class="block text-black text-sm font-bold mb-1">Title</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="title" type="text" placeholder="Enter title" wire:model="title"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('title')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 col-span-2">
                        <label for="description" class="block text-black text-sm font-bold mb-1">Description</label>
                        <div class="flex items-center bg-black rounded-md">
                            <textarea id="description" type="text" placeholder="Enter description" wire:model="description"
                                class="w-full p-2 border text-black focus:outline-none"></textarea>
                        </div>
                        @error('description')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="min_amount" class="block text-black text-sm font-bold mb-1">Min Amount</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="min_amount" type="number" placeholder="Enter minimum investment amount"
                                wire:model="min_amount" class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('min_amount')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="max_amount" class="block text-black text-sm font-bold mb-1">Max Amount</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="max_amount" type="number" placeholder="Enter maximum investment amount"
                                wire:model="max_amount" class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('max_amount')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="min_interest_rate" class="block text-black text-sm font-bold mb-1">Min Interest
                            Rate</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="min_interest_rate" type="number" placeholder="Enter minimum investment amount"
                                wire:model="min_interest_rate"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('min_interest_rate')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="max_interest_rate" class="block text-black text-sm font-bold mb-1">Max Interest
                            Rate</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="max_interest_rate" type="number" placeholder="Enter maximum investment amount"
                                wire:model="max_interest_rate"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('max_interest_rate')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="w-full text-white bg-gradient-to-r from-[#0f277e] to-blue-600 font-bold py-2 px-4 rounded-full hover:from-blue-500 hover:to-blue-700">
                    Update
                </button>
            </form>
        </div>
    </div>

</div>

<!-- JavaScript -->
<script>
    document.addEventListener('livewire:load', () => {
        Livewire.on('closeModal', () => {
            createPlanModal.classList.add('hidden');
            createPlanModal.classList.remove('flex');
        });
    });
</script>
<script>
    const openCreatePlanModalButton = document.getElementById('openCreatePlanModalButton');
    const closeCreatePlanModalButton = document.getElementById('closeCreatePlanModalButton');
    const createPlanModal = document.getElementById('createPlanModal');

    // Open deposit modal
    openCreatePlanModalButton.addEventListener('click', () => {
        createPlanModal.classList.remove('hidden');
        createPlanModal.classList.add('flex');
    });

    // Close deposit modal
    closeCreatePlanModalButton.addEventListener('click', () => {
        createPlanModal.classList.add('hidden');
        createPlanModal.classList.remove('flex');
    });
</script>
