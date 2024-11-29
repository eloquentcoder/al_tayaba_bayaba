<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Admins extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $username;
   

    public function createAdmin()
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|unique:users,username|max:255',
        ]);

        // Create the user
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'username' => $this->username,
            'password' => Hash::make($this->username),
            'user_type' => 'admin'
        ]);

        $user->admin()->create([
           'is_super_admin' => false 
        ]);

        $this->reset(['first_name', 'last_name', 'email', 'username']);
        session()->flash('success', 'Admin created successfully! Username is as password');
        $this->dispatch('closeModal');

    }

    #[Layout('components.layouts.admin-dashboard')]  
    public function render()
    {
        return view('livewire.admin.admins', [
            'admins' => User::where('user_type', 'admin')->get()
        ]);
    }
}
