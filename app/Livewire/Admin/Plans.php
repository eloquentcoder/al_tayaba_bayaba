<?php

namespace App\Livewire\Admin;

use App\Models\Plan;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Plans extends Component
{
    use WithPagination;

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
        session()->flash('success', 'Plan Created successfully!');
        $this->dispatch('closeModal');

    }

    public function deletePlan($id)
    {
        $plan = Plan::find($id);
        $plan->delete();

        session()->flash('success', 'Plan deleted successfully!');

    }

    #[Layout('components.layouts.admin-dashboard')]    
    public function render()
    {
        return view('livewire.admin.plans', [
            'plans' => Plan::all()
        ]);
    }
}
