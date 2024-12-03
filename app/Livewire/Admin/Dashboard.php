<?php

namespace App\Livewire\Admin;

use App\Models\DepositRequest;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Withdrawal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.admin-dashboard')]    
    public function render()
    {

        $userRegistrations = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        // Example data: Subscription Status Counts
        $subscriptionStatuses = Subscription::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');

        // Example data: Withdrawal Status Counts
        $withdrawalStatuses = Withdrawal::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');

        // Example data: Deposit Request Breakdown
        $depositStatuses = DepositRequest::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');


        return view('livewire.admin.dashboard', [
            'total_users' => User::where('user_type', 'user')->count(),
            'total_deposits' => DepositRequest::count(),
            'total_withdrawals' => Withdrawal::count(),
            'total_plans' => Plan::count(),
            'userRegistrations' => $userRegistrations,
            'subscriptionStatuses' => $subscriptionStatuses,
            'withdrawalStatuses' => $withdrawalStatuses,
            'depositStatuses' => $depositStatuses,
        ]);
    }
}
