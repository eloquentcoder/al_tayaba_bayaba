<?php

namespace App\Livewire\Portal;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PayoutPreview extends Component
{
    #[Layout('components.layouts.dashboard')] 
    public function render()
    {
        return view('livewire.portal.payout-preview');
    }
}
