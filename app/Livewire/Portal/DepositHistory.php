<?php

namespace App\Livewire\Portal;

use App\Models\DepositRequest;
use Livewire\Component;
use Livewire\Attributes\Layout;

class DepositHistory extends Component
{
    #[Layout('components.layouts.dashboard')] 
    public function render()
    {
        return view('livewire.portal.deposit-history', [
            'deposits' => DepositRequest::latest()->paginate(10)
        ]);
    }
}
