<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public string $email;
    public string $password;

    public function doLogin()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
            'user_type' => 'admin'
        ];

        if (!Auth::attempt($credentials)) {
            $this->addError('email', 'Invalid email/username or password.');
            return;
        }

        $user = User::where("email", $this->email)->first();
        Auth::login($user);

        return redirect()->intended(route('admin.dashboard'));
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
