<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-white">
    <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold text-white mb-6">Admins</h2>
        <button id="openCreateAdminModalButton"
            class="bg-[#0f277e] px-6 py-2 rounded-md text-white font-bold hover:from-yellow-600 hover:to-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            Create Admin
        </button>
    </div>

    <div class="mt-10">

        <div class="overflow-hidden border border-gray-700 rounded-lg shadow-lg">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-[#0f277e] text-white">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-bold">SL. NO.</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Full Name</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Email</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Username</th>
                        <th class="py-3 px-4 text-left text-sm font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white bg-white text-black">
                  @foreach ($admins as $key => $admin)
                  <tr>
                      <td class="py-3 px-4">{{ $key + 1 }}</td>
                      <td class="py-3 px-4 text-yellow-500">{{ $admin->first_name . " " . $admin->last_name  }}</td>
                      <td class="py-3 px-4 text-green-400">{{ $admin->email  }}</td>
                      <td class="py-3 px-4 text-black">{{ $admin->username }}</td>
                      <td class="py-3 px-4 text-black">

                      </td>
                  </tr>
                  @endforeach
                </tbody>
              
            </table>
        </div>
    </div>


    <div id="createAdminModal"
        class="{{ $errors->any() ? 'flex' : 'hidden' }} fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-white relative">
            <div class="flex justify-between items-center mb-4 pb-3 border-b">
                <h2 class="text-lg font-bold text-[#0f277e]">Create Admin</h2>
                <button id="closeCreateAdminModalButton" class="text-[#0f277e]">
                    &times;
                </button>
            </div>
            <form wire:submit.prevent="createAdmin">
                <div class="my-4 grid grid-cols-2 gap-2">
                    <div class="mb-4">
                        <label for="first_name" class="block text-black text-sm font-bold mb-1">First Name</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="first_name" type="text" placeholder="Enter First Name" wire:model="first_name"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('first_name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="block text-black text-sm font-bold mb-1">Last Name</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="last_name" type="text" placeholder="Enter Last Name" wire:model="last_name"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('last_name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-black text-sm font-bold mb-1">Email</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="email" type="email" placeholder="Enter email" wire:model="email"
                                class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="username" class="block text-black text-sm font-bold mb-1">Username</label>
                        <div class="flex items-center bg-black rounded-md">
                            <input id="username" type="text" placeholder="Enter username"
                                wire:model="username" class="w-full p-2 border text-black focus:outline-none" />
                        </div>
                        @error('username')
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

</div>

<!-- JavaScript -->
<script>
    document.addEventListener('livewire:load', () => {
        Livewire.on('closeModal', () => {
            createAdminModal.classList.add('hidden');
            createAdminModal.classList.remove('flex');
        });
    });
</script>
<script>
    const openCreateAdminModalButton = document.getElementById('openCreateAdminModalButton');
    const closeCreateAdminModalButton = document.getElementById('closeCreateAdminModalButton');
    const createAdminModal = document.getElementById('createAdminModal');

    // Open deposit modal
    openCreateAdminModalButton.addEventListener('click', () => {
        createAdminModal.classList.remove('hidden');
        createAdminModal.classList.add('flex');
    });

    // Close deposit modal
    closeCreateAdminModalButton.addEventListener('click', () => {
        createAdminModal.classList.add('hidden');
        createAdminModal.classList.remove('flex');
    });
</script>