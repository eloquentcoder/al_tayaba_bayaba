<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $username;
    public $phone_number;
    public $phone_code;
    public $password;
    public $password_confirmation;

    public function doRegister()
    {
        // Validate the input data
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|unique:users,username|max:255',
            'phone_number' => 'required|string|unique:users,phone_number|max:15',
            'phone_code' => 'required|string|max:10',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'username' => $this->username,
            'phone_number' => $this->phone_number,
            'phone_code' => $this->phone_code,
            'password' => Hash::make($this->password),
        ]);

        // Log in the user automatically after registration
        Auth::login($user);

        // Redirect to the home page or intended route
        return redirect()->intended(route('portal.dashboard'));
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
