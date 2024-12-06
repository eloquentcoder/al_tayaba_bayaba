<?php

namespace App\Livewire\Portal;

use App\Mail\PackagePurchaseAlertMail;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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

    public $uploadError = '';

    public function updatedPaymentProof()
    {
        try {
            if (!$this->payment_proof) {
                $this->uploadError = 'No file was uploaded';
                return;
            }

            // Check file upload errors
            if ($this->payment_proof->getError() !== UPLOAD_ERR_OK) {
                $errors = [
                    UPLOAD_ERR_INI_SIZE => 'The file exceeds upload_max_filesize',
                    UPLOAD_ERR_FORM_SIZE => 'The file exceeds MAX_FILE_SIZE',
                    UPLOAD_ERR_PARTIAL => 'The file was only partially uploaded',
                    UPLOAD_ERR_NO_FILE => 'No file was uploaded',
                    UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder',
                    UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
                    UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload'
                ];

                $errorCode = $this->payment_proof->getError();
                $this->uploadError = $errors[$errorCode] ?? 'Unknown upload error';

                Log::error('File upload error:', [
                    'error_code' => $errorCode,
                    'error_message' => $this->uploadError
                ]);

                return;
            }

            // Validate file
            $this->validate([
                'payment_proof' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
            ]);

            Log::info('File validation passed:', [
                'name' => $this->payment_proof->getClientOriginalName(),
                'size' => $this->payment_proof->getSize(),
                'mime' => $this->payment_proof->getMimeType()
            ]);
        } catch (\Exception $e) {
            Log::error('File upload exception:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            $this->uploadError = 'An error occurred while processing the file: ' . $e->getMessage();
        }
    }

    public function submitPackagePurchase()
    {

        $this->validate([
            'amount' => "required|numeric|min:{$this->selectedPlan->min_investment_amount}|max:{$this->selectedPlan->max_investment_amount}",
            'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        try {
            try {
                $proofPath = $this->payment_proof->store('payment_proofs', 'public');
            } catch (\Exception $e) {
                Log::error('File storage failed:', [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);
                throw new \Exception('Failed to store file: ' . $e->getMessage());
            }

            $subscription = Subscription::create([
                'amount' => $this->amount,
                'payment_proof' => $proofPath,
                'user_id' => Auth::id(),
                'plan_id' => $this->selectedPlan->id
            ]);

            Mail::to(env('APP_ADMIN_EMAIL'))->to(new PackagePurchaseAlertMail($subscription));

            $this->isModalOpen = false;
            session()->flash('success', 'Purchase request submitted successfully! An admin will look at your request');
            $this->reset(['amount', 'payment_proof', 'uploadError']);
        } catch (\Exception $e) {
            Log::error('Package purchase failed:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            session()->flash('error', 'Failed to submit purchase: ' . $e->getMessage());
        }
    }

    public function selectPlan(Plan $plan)
    {
        $this->selectedPlan = $plan;
        $this->isModalOpen = !$this->isModalOpen;
    }

    public function setModal($modalID)
    {
        if ($this->currentModal == 1) {
            $this->validate([
                'amount' => "required|numeric|min:{$this->selectedPlan->min_investment_amount}|max:{$this->selectedPlan->max_investment_amount}"
            ]);
        }
        $this->currentModal = $modalID;
    }

    public function toggleModal()
    {
        $this->isModalOpen = !$this->isModalOpen;
    }



    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.portal.packages', [
            'plans' => Plan::all()
        ]);
    }
}
