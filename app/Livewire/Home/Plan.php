<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Plan as ModelPlan;
use Illuminate\Support\Facades\Auth;

class Plan extends Component
{
    public $selectedPlan;
    public $wallet;
    public $amount;

    public function selectPlan(ModelPlan $plan)
    {
        $this->selectedPlan = $plan;
    }

    public function removePlan()
    {
        $this->selectedPlan = null;
    }

    public function createPlan()
    {
        if(!Auth::check()) {
            session()->put('redirect_link', 'portal.packages');
            return redirect()->route('login');
        }

        $this->validate([
            'wallet' => 'required',
            'amount' => 'required'
        ]);
    
    }

    public function render()
    {
        return view('livewire.home.plan', [
            'plans' => ModelPlan::all()
        ]);
    }
}
