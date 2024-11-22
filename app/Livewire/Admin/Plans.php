<?php

namespace App\Livewire\Admin;

use App\Models\Plan;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Plans extends Component
{

    public $title;
    public $description;
    public $min_amount;
    public $max_amount;
    public $min_interest_rate;
    public $max_interest_rate;

    public function createPlan()
    {
        $this->validate([
            'title' => 'required|unique:plans,title',
            'description' => 'required',
            'min_amount' => 'required|numeric',
            'max_amount' => 'required|numeric|gte:min_amount',
            'min_interest_rate' => 'required|numeric',
            'max_interest_rate' => 'required|numeric|gte:min_interest_rate'
        ]);

        Plan::create([
            'title' => $this->title,
            'description' => $this->description,
            'min_investment_amount' => $this->min_amount,
            'max_investment_amount' => $this->max_amount,
            'min_interest_rate' => $this->min_interest_rate,
            'max_interest_rate' => $this->max_interest_rate
        ]);

        $this->reset(['title', 'description', 'min_amount', 'max_amount', 'min_interest_rate', 'max_interest_rate']);
        $this->dispatch('notify', ['type' => 'success', 'message' => 'Plan Created successfully']);
        $this->dispatch('closeModal');

    }

    #[Layout('components.layouts.admin-dashboard')]    
    public function render()
    {
        return view('livewire.admin.plans', [
            'plans' => Plan::all()
        ]);
    }
}
