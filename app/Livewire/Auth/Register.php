<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\Request;


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
    public $referrer;

    public function mount()
    {
        // Get the 'ref' parameter from the URL
        $this->phone_code = "+92";
        $this->referrer = Request::query('ref');
    }

    public function doRegister()
    {
        // Validate the input data
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|unique:users,username|max:255',
            'phone_number' => 'required|string|unique:users,phone_number|max:10|min:10',
            'phone_code' => 'required|string|max:10',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                \Illuminate\Validation\Rules\Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            'referrer' => 'nullable|exists:users,username'
        ], [
            'password.min' => 'The password must be at least 8 characters long.',
            'password.mixedCase' => 'The password must include both uppercase and lowercase letters.',
            'password.letters' => 'The password must include at least one letter.',
            'password.numbers' => 'The password must include at least one number.',
            'password.symbols' => 'The password must include at least one special character.',
            'password.uncompromised' => 'The password has been found in a data leak. Please choose a different password.'
        ]);
        

        if ($this->referrer) {
            $parent = User::where('username', $this->referrer)->first();
        } else {
            $parent = null;
        }

        // Create the user
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'username' => $this->username,
            'phone_number' => $this->phone_number,
            'phone_code' => $this->phone_code,
            'password' => Hash::make($this->password),
            'parent_id' => $parent ? $parent->id : null
        ]);

        $user->balance()->create();


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
