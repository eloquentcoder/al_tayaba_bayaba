<?php

namespace App\Livewire\Portal;

use App\Models\Plan;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Packages extends Component
{
    #[Layout('components.layouts.dashboard')] 
    public function render()
    {
        return view('livewire.portal.packages', [
            'plans' => Plan::all()
        ]);
    }
}
