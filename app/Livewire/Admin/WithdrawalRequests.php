<?php

namespace App\Livewire\Admin;

use App\Actions\CreateTransaction;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class WithdrawalRequests extends Component
{
    use WithPagination;

    public $selectedWithdrawal;

    public function selectWithdrawal(Withdrawal $withdrawal)
    {
        $this->selectedWithdrawal = $withdrawal;
    }

    public function removeWithdrawal()
    {
        $this->selectedWithdrawal = null;
    }

    public function rejectWithdrawal()
    {
        $this->selectedWithdrawal->update([
            'status' => 'cancelled'
        ]);

        // Mail::to($this->selectedSubscription->user->email)->send(new PackagePurchaseAdminReplyMail($this->selectedSubscription, "rejected"));

        $this->selectedWithdrawal = null;
        session()->flash('success', 'withdrawal request reject successfully!');
    }

    public function acceptSubscription()
    {

        if (!Auth::user()->admin->is_super_admin) {
            $this->selectedWithdrawal->update([
                'status' => 'approved_by_subadmin'
            ]);

            // Mail::to($this->selectedSubscription->user->email)->send(new PackagePurchaseAdminReplyMail($this->selectedSubscription, "accepted"));

            session()->flash('success', 'subscription request approved by sub admin successfully!');
            return;
        }

        $this->selectedWithdrawal->update([
            'status' => 'active',
            'is_paid' => true
        ]);

        $user = User::find($this->selectedWithdrawal->user_id);
        $user->balance()->decrement($this->selectedWithdrawal->selected_wallet, $this->selectedWithdrawal->amount);

        (new CreateTransaction)->handle('withdrawal', $this->selectedWithdrawal->amount, 'successful', $user->id);

        // Mail::to($this->selectedSubscription->user->email)->send(new PackagePurchaseAdminReplyMail($this->selectedSubscription, "accepted"));

        session()->flash('success', 'withdrawal request confirmed successfully!');
        $this->selectedWithdrawal = null;

    }

    #[Layout('components.layouts.admin-dashboard')] 
    public function render()
    {
        return view('livewire.admin.withdrawal-requests', [
            'withdrawals' =>  Auth::user()->admin->is_super_admin ? Withdrawal::latest()->paginate(15) : Withdrawal::where([['status', 'pending']])->latest()->paginate(15) 
        ]);
    }
}
