<?php

namespace App\Livewire\Portal;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Support\Facades\Log;
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

    protected $messages = [
        'payment_proof.file' => 'The payment proof must be a valid file.',
        'payment_proof.mimes' => 'The payment proof must be a JPG, JPEG, PNG, or PDF file.',
        'payment_proof.max' => 'The payment proof must not be larger than 2MB.',
    ];

    public function updatedPaymentProof()
    {
        try {
            $this->validate([
                'payment_proof' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
            ]);
            
            // If validation passes, you could optionally:
            // 1. Show a success message
            session()->flash('upload_status', 'File validated successfully!');
            
            // 2. Get file information
            if ($this->payment_proof) {
                $fileSize = round($this->payment_proof->getSize() / 1024, 2); // Size in KB
                $fileType = $this->payment_proof->getMimeType();
                
                Log::info('File validated:', [
                    'name' => $this->payment_proof->getClientOriginalName(),
                    'size' => $fileSize . 'KB',
                    'type' => $fileType
                ]);
            }
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails:
            // 1. The error will automatically be shown in the view
            // 2. You could log the error
            Log::error('File validation failed:', [
                'errors' => $e->errors()
            ]);
        }
    }

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

        Log::info($this->amount);
        Log::info($this->payment_proof);
        

        $this->validate([
            'amount' => "required|numeric|min:{$this->selectedPlan->min_investment_amount}|max:{$this->selectedPlan->max_investment_amount}",
            'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', 
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
        $this->reset(['amount', 'payment_proof']);
    }

    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.portal.packages', [
            'plans' => Plan::all()
        ]);
    }
}
