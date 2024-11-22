<?php

namespace App\Livewire\Admin;

use App\Models\DepositRequest;
use App\Models\Plan;
use App\Models\User;
use App\Models\Withdrawal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.admin-dashboard')]    
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'total_users' => User::where('user_type', 'user')->count(),
            'total_deposits' => DepositRequest::count(),
            'total_withdrawals' => Withdrawal::count(),
            'total_plans' => Plan::count()
        ]);
    }
}
