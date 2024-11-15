<?php

namespace App\Livewire\Portal;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Deposit extends Component
{
    #[Layout('components.layouts.dashboard')] 
    public function render()
    {
        return view('livewire.portal.deposit');
    }
}
