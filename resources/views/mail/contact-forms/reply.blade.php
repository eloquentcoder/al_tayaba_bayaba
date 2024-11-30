<x-mail::message>
# Hello {{ $contactForm->name }},

Hope this message finds you well, 

{{ $message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>