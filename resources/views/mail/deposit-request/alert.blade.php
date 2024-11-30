<x-mail::message>
# Hello Admin,

You have just received a deposit request. Kindly view the details below;

<x-mail::table>
| Details       | Values        |
| ------------- | :-----------: |
| Name          | {{ $depositRequest->user->full_name }}      |
| Amount        | {{ $depositRequest->amount }}      |
| Created At    | {{ $depositRequest->created_at->format('d F, Y h:i A') }}      |
</x-mail::table>

Login to your admin panel to review this request.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
