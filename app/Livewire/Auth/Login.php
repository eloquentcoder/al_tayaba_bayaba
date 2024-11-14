<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email_username;
    public string $password;

    public function doLogin()
    {
        $this->validate([
            'email_username' => 'required',
            'password' => 'required',
        ]);

        // Attempt to find the user by email or username
        $credentials = [
            filter_var($this->email_username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username' => $this->email_username,
            'password' => $this->password,
        ];

        // Attempt to login with the credentials
        if (Auth::attempt($credentials)) {
            // Redirect to the intended page after successful login
            return redirect()->intended(route('dashboard.index'));
        }

        // If authentication fails, show an error message
        $this->addError('email_username', 'Invalid email/username or password.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
