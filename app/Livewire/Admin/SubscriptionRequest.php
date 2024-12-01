<?php

namespace App\Livewire\Admin;

use App\Actions\UpdateReferrerBalance;
use App\Mail\PackagePurchaseAdminReplyMail;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

        Mail::to($this->selectedSubscription->user->email)->send(new PackagePurchaseAdminReplyMail($this->selectedSubscription, "rejected"));

        $this->selectedSubscription = null;
        session()->flash('success', 'Subscription request reject successfully!');
    }

    public function acceptSubscription()
    {

        if (!Auth::user()->admin->is_super_admin) {
            $this->selectedSubscription->update([
                'status' => 'approved_by_subadmin'
            ]);

            Mail::to($this->selectedSubscription->user->email)->send(new PackagePurchaseAdminReplyMail($this->selectedSubscription, "accepted"));

            session()->flash('success', 'subscription request app4oved by sub admin successfully!');
            return;
        }

        $this->selectedSubscription->update([
            'status' => 'active',
            'is_paid' => true
        ]);

        $user = User::find($this->selectedSubscription->user_id);
        $user->balance()->increment('emr_balance', $this->selectedSubscription->amount);

        (new UpdateReferrerBalance())->updateBalance($user->id, $this->selectedSubscription->amount);

        Mail::to($this->selectedSubscription->user->email)->send(new PackagePurchaseAdminReplyMail($this->selectedSubscription, "accepted"));

        session()->flash('success', 'Subscription request confirmed successfully!');
        $this->selectedSubscription = null;

    }

    #[Layout('components.layouts.admin-dashboard')] 
    public function render()
    {
        return view('livewire.admin.subscription-request', [
            'subscriptions' => Auth::user()->admin->is_super_admin ? Subscription::latest()->paginate(15) : Subscription::where([['is_paid', false], ['status', 'pending']])->latest()->paginate(15) 
        ]);
    }
}
