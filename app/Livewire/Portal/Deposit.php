<?php

namespace App\Livewire\Portal;

use App\Mail\DepositRequestAlertMail;
use App\Models\DepositRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Deposit extends Component
{
    use WithFileUploads;

    public $amount;
    public $payment_proof;

    public $currentModal = 1;
    public $isModalOpen = false;

    public function setModal($currentPage)
    {
        $this->currentModal = $currentPage;
    }

    public function toggleModal()
    {
        $this->isModalOpen = !$this->isModalOpen;
    }

    public function submitDeposit()
    {
        $this->validate([
            'amount' => 'required|numeric|min:100',
            'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Customize rules as needed
        ]);        

        // Handle the file upload
        $proofPath = $this->payment_proof->store('payment_proofs', 'public');

        // Store the deposit details in the database (example)
        $DepositRequest = DepositRequest::create([
            'amount' => $this->amount,
            'payment_proof' => $proofPath,
            'status' => 'pending',
            'unique_id' => uniqid(),
            'user_id' => Auth::id()
        ]);

        Mail::to(env('APP_ADMIN_EMAIL'))->send(new DepositRequestAlertMail($DepositRequest));

        $this->isModalOpen = false;
        session()->flash('success', 'Deposit request submitted successfully! An admin will look at your payments to verify');
    }

    #[Layout('components.layouts.dashboard')] 
    public function render()
    {
        return view('livewire.portal.deposit');
    }
}
