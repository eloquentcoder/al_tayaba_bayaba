<?php

namespace App\Livewire\Admin;

use App\Actions\CreateTransaction;
use App\Actions\UpdateReferrerBalance;
use App\Mail\AdminReplyDepositRequestMail;
use App\Models\DepositRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Deposits extends Component
{
    use WithPagination;

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
        if ($this->selectedDeposit->status == 'rejected') {
            $this->selectedDeposit->update([
                'status' => 'blacklisted'
            ]);

            Mail::to($this->selectedDeposit->user->email)->send(new AdminReplyDepositRequestMail($this->selectedDeposit, "rejected"));

            session()->flash('success', 'Deposit request reject and blacklisted successfully!');
            $this->selectedDeposit = null;
            return;
        }

        $this->selectedDeposit->update([
            'status' => 'rejected'
        ]);

        Mail::to($this->selectedDeposit->user->email)->send(new AdminReplyDepositRequestMail($this->selectedDeposit, "rejected"));

        $this->selectedDeposit = null;
        session()->flash('success', 'Deposit request reject successfully!');
    }

    public function acceptDeposit()
    {

        if (!Auth::user()->admin->is_super_admin) {
            $this->selectedDeposit->update([
                'status' => 'approved_by_subadmin'
            ]);

            Mail::to($this->selectedDeposit->user->email)->send(new AdminReplyDepositRequestMail($this->selectedDeposit, "accepted"));
            session()->flash('success', 'Deposit request appeoved by sub admin successfully!');
            return;
        }

        $this->selectedDeposit->update([
            'status' => 'approved'
        ]);
        Mail::to($this->selectedDeposit->user->email)->send(new AdminReplyDepositRequestMail($this->selectedDeposit, "accepted"));

        (new CreateTransaction)->handle('wallet_deposit', $this->selectedDeposit->amount, 'successful', $this->selectedDeposit->user->id);

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
            'deposits' => Auth::user()->admin->is_super_admin ? DepositRequest::with('user')->latest()->paginate(15) : DepositRequest::with('user')->where('status', 'pending')->latest()->paginate(15)
        ]);
    }
}
