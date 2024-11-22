<?php

namespace App\Livewire\Portal;

use App\Models\Plan;
use App\Models\Subscription;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Packages extends Component
{
    use WithFileUploads;

    public $currentModal = 1;
    public $isModalOpen = false;
    public $selectedPlan;

    public $amount;
    public $payment_proof;

    public function selectPlan(Plan $plan)
    {
        $this->selectedPlan = $plan;
        $this->isModalOpen = !$this->isModalOpen;
    }

    public function setModal($modalID)
    {
        $this->currentModal = $modalID;
    }

    public function toggleModal()
    {
        $this->isModalOpen = !$this->isModalOpen;
    }

    public function submitPackagePurchase()
    {
        $this->validate([
            'amount' => "required|numeric|min:{$this->selectedPlan->min_investment_amount}|max:{$this->selectedPlan->max_investment_amount}",
            'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Customize rules as needed
        ]);

        if ($this->amount < $this->selectedPlan->min_investment_amount) {
            $this->isModalOpen = false;
            session()->flash('error', 'the amount you entered is too low');
            return;
        }

        if ($this->amount > $this->selectedPlan->max_investment_amount) {
            $this->isModalOpen = false;
            session()->flash('error', 'the amount you entered is too high');
            return;
        }

        // Handle the file upload
        $proofPath = $this->payment_proof->store('payment_proofs', 'public');

        $subscription = Subscription::create([
            'amount' => $this->amount,
            'payment_proof' => $proofPath,
            'user_id' => auth()->id(),
            'plan_id' => $this->selectedPlan->id
        ]);

        $this->isModalOpen = false;
        session()->flash('success', 'Purchase request submitted successfully! An admin will look at your payments to verify');
    }

    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.portal.packages', [
            'plans' => Plan::all()
        ]);
    }
}
