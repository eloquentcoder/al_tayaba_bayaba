<?php

namespace App\Livewire\Admin;

use App\Actions\UpdateReferrerBalance;
use App\Models\DepositRequest;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Deposits extends Component
{

    public $selectedDeposit;

    public function selectDeposit(DepositRequest $deposit)
    {
        $this->selectedDeposit = $deposit;
    }

    public function removeDeposit()
    {
        $this->selectedDeposit = null;
    }

    public function rejectDeposit()
    {
        if($this->selectedDeposit->status == 'rejected') {
            $this->selectedDeposit->update([
                'status' => 'blacklisted'
            ]);

            session()->flash('success', 'Deposit request reject and blacklisted successfully!');
            $this->selectedDeposit = null;
            return;
        }

        $this->selectedDeposit->update([
            'status' => 'rejected'
        ]);

        $this->selectedDeposit = null;
        session()->flash('success', 'Deposit request reject successfully!');
    }

    public function acceptDeposit()
    {
        $this->selectedDeposit->update([
            'status' => 'approved'
        ]);

        $user = User::find($this->selectedDeposit->user_id);
        $user->balance()->increment('deposit_balance', $this->selectedDeposit->amount);

        (new UpdateReferrerBalance())->updateBalance($user->id, $this->selectedDeposit->amount);

        session()->flash('success', 'Deposit request confirmed successfully!');
        $this->selectedDeposit = null;

    }

    #[Layout('components.layouts.admin-dashboard')]    
    public function render()
    {
        return view('livewire.admin.deposits', [
            'deposits' => DepositRequest::latest()->paginate(15)
        ]);
    }
}
