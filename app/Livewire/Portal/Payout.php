<?php

namespace App\Livewire\Portal;

use App\Models\Balance;
use App\Models\Withdrawal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Payout extends Component
{
    public $currentModal = 1;
    public $isModalOpen = false;

    public $amount;
    public $selected_wallet;

    public function setModal($currentPage)
    {
        $this->currentModal = $currentPage;
    }

    public function toggleModal()
    {
        $this->isModalOpen = !$this->isModalOpen;
    }

    public function requestWithdrawal()
    {
        $this->validate([
            'amount' => 'required|numeric|min:100|max:10000000',
            'selected_wallet' => 'required'
        ]);

        $wallet = Balance::where('user_id', auth()->id())->value($this->selected_wallet);
        if ($wallet < $this->amount) {
            $this->addError('amount', 'Amount cannot be greater than wallet balance');
            return;
        }

        Withdrawal::create([
            'amount' => $this->amount,
            'status' => 'pending',
            'user_id' => auth()->id(),
            'selected_wallet' => $this->selected_wallet
        ]);

        session()->flash('success', 'withdrawal request submitted successfully! An admin will look at your payments to verify');
    }

    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.portal.payout');
    }
}
