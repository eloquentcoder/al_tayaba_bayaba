<?php

namespace App\Livewire\Portal;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TwoStepSecurity extends Component
{
    public $two_security_code;
    public $qr_code_url;

    public function mount()
    {
        $this->two_security_code = Auth::user()->two_factor_secret;
        $this->qr_code_url = Auth::user()->two_factor_qr_url;
    }

    public function enable2FA()
    {
        $google2fa = new Google2FA();

        // Generate a new secret key
        $secretKey = $google2fa->generateSecretKey();

        // Save the secret key to the user's profile
        $user = User::find(Auth::id());
        $user->two_factor_secret = $secretKey;
        $user->two_factor_enabled = true;
        $user->save();

        // Generate the QR code URL
        $qrCodeUrl = $google2fa->getQRCodeUrl(
            'Al_Tayaba',         // Replace with your app name
            $user->email,
            $secretKey
        );

        $qrCodeSvg = QrCode::size(200)->generate($qrCodeUrl);
        $user->two_factor_qr_url = base64_encode($qrCodeSvg);
        $user->save();

        $this->two_security_code = $user->two_factor_secret;
        $this->qr_code_url = $user->two_factor_qr_url;

        session()->flash('success', '2 factor authentication set up successfully');
    }

    public function disabled2FA()
    {
        $user = User::find(Auth::id());
        $user->two_factor_secret = null;
        $user->two_factor_enabled = false;
        $user->two_factor_qr_url = null;
        $this->two_security_code = null;
        $this->qr_code_url = null;
        $user->save();

        session()->flash('success', '2FA disabled successfully.');
    }



    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.portal.two-step-security');
    }
}
