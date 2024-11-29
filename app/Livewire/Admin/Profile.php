<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Profile extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $username;

    public $password;
    public $password_confirmation;

    public function mount()
    {
        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;
        $this->email = Auth::user()->email;
        $this->phone_number = Auth::user()->phone_number;
        $this->username = Auth::user()->username;
    }

    public function updateProfile()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::id()),
            ],
            'username' => [
                'required',
                Rule::unique('users')->ignore(Auth::id()),
            ],
        ]);

        $user = User::find(Auth::id());
        $user->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'username' => $this->username,
        ]);

        session()->flash('success', 'Profile updated successfully');
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = User::find(Auth::id());
        $user->update([
            'password' => bcrypt($this->password)
        ]);

        session()->flash('success', 'Password updated successfully');
    }


    #[Layout('components.layouts.admin-dashboard')]    
    public function render()
    {
        return view('livewire.admin.profile');
    }
}
