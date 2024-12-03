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
            'password' => 'required'
        ]);

        // Attempt to find the user by email or username
        $credentials = [
            filter_var($this->email_username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username' => $this->email_username,
            'password' => $this->password,
             'user_type' => 'user'
        ];

        if (!Auth::attempt($credentials)) {
            $this->addError('email_username', 'Invalid email/username or password.');
            return;
        }
  
        $user = User::where("email", $this->email_username)->orWhere('username', $this->email_username)->first();

        if (!$user->is_active) {
            $this->addError('email_username', 'You access has been restricted. Contact support for help');
            return;
        }

        Auth::login($user);

        if ($user->two_factor_enabled) {
            Auth::logout();
            // Store user ID in session for 2FA validation
            session()->put('user_2fa_id', $user->id);
            return redirect()->route('2fa.verify');
        }


        $redirect_route = session()->get('redirect_link');
        session()->remove('redirect_link');

        return redirect()->intended(route( $redirect_route ? $redirect_route : 'portal.dashboard'));
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
