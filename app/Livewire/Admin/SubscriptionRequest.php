<?php

namespace App\Livewire\Admin;

use App\Models\Subscription;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SubscriptionRequest extends Component
{
    public $selectedSubscription;

    public function selectSubscription(Subscription $subscription)
    {
        $this->selectedSubscription = $subscription;
    }

    public function removeSubscription()
    {
        $this->selectedSubscription = null;
    }

    public function rejectSubscription()
    {

        $this->selectedSubscription->update([
            'status' => 'cancelled'
        ]);

        $this->selectedSubscription = null;
        session()->flash('success', 'Subscription request reject successfully!');
    }

    public function acceptSubscription()
    {
        $this->selectedSubscription->update([
            'status' => 'active',
            'is_paid' => true
        ]);

        $user = User::find($this->selectedSubscription->user_id);
        $user->balance()->increment('main_balance', $this->selectedSubscription->amount);

        session()->flash('success', 'Subscription request confirmed successfully!');
        $this->selectedSubscription = null;

    }

    #[Layout('components.layouts.admin-dashboard')] 
    public function render()
    {
        return view('livewire.admin.subscription-request', [
            'subscriptions' => Subscription::where('is_paid', false)->latest()->paginate(15)
        ]);
    }
}
