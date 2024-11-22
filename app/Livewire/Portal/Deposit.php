<?php

namespace App\Livewire\Portal;

use App\Models\DepositRequest;
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
        DepositRequest::create([
            'amount' => $this->amount,
            'payment_proof' => $proofPath,
            'status' => 'pending',
            'user_id' => auth()->id()
        ]);

        $this->isModalOpen = false;
        session()->flash('success', 'Deposit request submitted successfully! An admin will look at your payments to verify');
    }

    #[Layout('components.layouts.dashboard')] 
    public function render()
    {
        return view('livewire.portal.deposit');
    }
}
