<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Users extends Component
{
    #[Layout('components.layouts.admin-dashboard')] 
    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::where('user_type', 'user')->latest()->paginate(20)
        ]);
    }
}
