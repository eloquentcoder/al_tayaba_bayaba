<?php

namespace App\Livewire\Portal;

use App\Models\DepositRequest;
use App\Models\Subscription;
use App\Models\Withdrawal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.dashboard')] 
    public function render()
    {
        return view('livewire.portal.dashboard', [
            'total_purchased' => Subscription::where([['is_paid', true], ['user_id', auth()->id()]])->sum('amount'),
            'total_deposit' => DepositRequest::where('status', 'approved')->where('user_id', auth()->id())->sum('amount'),
            'total_withdrawal' => Withdrawal::where('status', 'approved')->where('user_id', auth()->id())->sum('amount')
        ]);
    }
}
