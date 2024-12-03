<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Users extends Component
{

    public $search = '';


    public function toggleBlockUser(User $user)
    {
        $user->update([
            'is_active' => !$user->is_active
        ]);
        session()->flash('success', 'user status toggled successfully!');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        session()->flash('success', 'user deleted successfully!');
    }

    #[Layout('components.layouts.admin-dashboard')]
    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::where(function ($query) {
                $query->where('first_name', 'like', "%{$this->search}%")
                    ->orWhere('last_name', 'like', "%{$this->search}%")
                    ->orWhere('username', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%");
            })->where('user_type', 'user')->latest()->paginate(20)
        ]);
    }
}
