<?php

namespace App\Livewire\Auth;

use App\Models\User;
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

        if (!Auth::attempt($credentials)) {
            $this->addError('email_username', 'Invalid email/username or password.');
            return;
        }

        $user = User::where("email", $this->email_username)->orWhere('username', $this->email_username)->first();
        Auth::login($user);

        if ($user->user_type == 'admin') {
           return redirect()->route('admin.dashboard');
        }

        return redirect()->intended(route('portal.dashboard'));
            
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
