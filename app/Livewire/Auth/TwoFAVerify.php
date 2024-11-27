<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;

class TwoFAVerify extends Component
{
    public $token;

    public function verify2FA()
    {
        $this->validate([
            'token' => 'required|numeric',
        ]);

        $google2fa = new Google2FA();
        $user = User::find(Auth::id());

        // Validate the token
        $valid = $google2fa->verifyKey($user->two_factor_secret, $this->token);


        if ($valid) {
            // Enable 2FA
            $user->two_factor_enabled = true;
            session()->put('two_factor_passed', true);
            $user->save();

            return redirect()->route('portal.dashboard')->with('success', '2FA enabled successfully.');
        }

        $this->addError('token', 'Invalid 2FA token.');
    }


    public function render()
    {
        return view('livewire.auth.two-f-a-verify');
    }
}
