<?php

namespace App\Livewire\Admin;

use App\Models\Transaction;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Transactions extends Component
{
    use WithPagination;

    #[Layout('components.layouts.admin-dashboard')] 
    public function render()
    {
        return view('livewire.admin.transactions', [
            'transactions' => Transaction::latest()->paginate(20)
        ]);
    }
}
