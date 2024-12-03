<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Users extends Component
{

    public function toggleBlockUser(User $user)
    {
        $user->update([
            'is_active' => !$user->is_active
        ]);
        session()->flash('success', 'user status toggled successfully!');
    }

    public function deleteUser(User $user) {
        $user->delete();
        session()->flash('success', 'user deleted successfully!');
    }

    #[Layout('components.layouts.admin-dashboard')]
    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::where('user_type', 'user')->latest()->paginate(20)
        ]);
    }
}
