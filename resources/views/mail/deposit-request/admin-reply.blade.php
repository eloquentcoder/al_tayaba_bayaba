<x-mail::message>
# Deposit Update

Hello {{$depositRequest->user->first_name}},

@if ($reply == 'rejected' && $depositRequest->status == 'rejected')
Your deposit request was just rejected due to a discrepancy with your payment proof. Kindly login to review your proof or payment, or your account will be disabled.
@endif

@if ($reply == 'accepted')
    @if ($depositRequest->status == 'approved_by_subadmin')
    Your deposit request was approved by an admin pending final system approval!
    @elseif ($depositRequest->status == 'approved')
    Congratulations! Your deposit request was just approved! Login to your dashboard to see your updated balance.
    @endif
@endif

<x-mail::button :url="env('APP_URL').'/login'">
Login
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
