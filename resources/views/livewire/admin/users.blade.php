<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-white">
    {{-- <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold text-white mb-6">Admins</h2>
        <button id="openCreateAdminModalButton"
            class="bg-[#0f277e] px-6 py-2 rounded-md text-white font-bold hover:from-yellow-600 hover:to-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            Create Admin
        </button>
    </div>

    @if (session()->has('success'))
    <div class="bg-green-500 text-white p-4 rounded-md">
        {{ session('success') }}
    </div>
@endif --}}

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
                  @foreach ($users as $key => $user)
                  <tr>
                      <td class="py-3 px-4">{{ $key + 1 }}</td>
                      <td class="py-3 px-4 text-black">{{ $user->first_name . " " . $user->last_name  }}</td>
                      <td class="py-3 px-4 text-black">{{ $user->email  }}</td>
                      <td class="py-3 px-4 text-black">{{ $user->username }}</td>
                      <td class="py-3 px-4 text-black flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                          </svg>
                                                    
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              {{ $users->links('pagination::simple-tailwind') }}
            </table>
        </div>
    </div>


    {{-- <div id="createAdminModal"
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
    </div> --}}

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
