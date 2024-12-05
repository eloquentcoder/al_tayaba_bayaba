<?php

namespace App\Livewire\Portal;

use App\Models\Withdrawal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class WithdrawalHistory extends Component
{
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.portal.withdrawal-history', [
            'withdrawals' => Withdrawal::where('user_id', auth()->id())->latest()->paginate(15)
        ]);
    }
}
