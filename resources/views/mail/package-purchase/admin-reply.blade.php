<x-mail::message>
# Plan Subscription Update

Hello {{$subscription->user->first_name}},

@if ($reply == 'rejected' && $subscription->status == 'cancelled')
Your subscription request of {{ $subscription->amount }} was just rejected due to a discrepancy with your payment proof. Kindly login to review your proof or payment, or your account will be disabled.
@endif

@if ($reply == 'accepted')
    @if ($subscription->status == 'approved_by_subadmin')
    Your subscription request of {{ $subscription->amount }} was approved by an admin pending final system approval!
    @elseif ($subscription->status == 'active')
    Congratulations! Your subscription request of {{ $subscription->amount }} was just approved! Login to your dashboard to see your updated balance and active subscription.
    @endif
@endif

<x-mail::button :url="env('APP_URL').'/login'">
Login
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
