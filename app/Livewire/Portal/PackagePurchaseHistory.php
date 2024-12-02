<?php

namespace App\Livewire\Portal;

use App\Models\Subscription;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PackagePurchaseHistory extends Component
{
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.portal.package-purchase-history', [
            'purchase_histories' => Subscription::where('user_id', auth()->id())->latest()->paginate(10)
        ]);
    }
}
