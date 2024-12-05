<?php

namespace App\Livewire\Portal;

use App\Models\Transaction;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Transactions extends Component
{
    #[Layout('components.layouts.dashboard')] 
    public function render()
    {
        return view('livewire.portal.transactions', [
            'transactions' => Transaction::where('user_id', auth()->id())->latest()->paginate(20)
        ]);
    }
}
