<?php

namespace App\Livewire\Home;

use App\Models\Plan;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.home.index', [
            'plans' => Plan::all()
        ]);
    }
}
