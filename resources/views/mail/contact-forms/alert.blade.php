<x-mail::message>
# Introduction

Hello admin. Someone just filled the contact form. Here are the details. 

<x-mail::table>
| Details       | Values        |
| ------------- | :-----------: |
| Name          | {{ $contactForm->name }}      |
| Email         | {{ $contactForm->email }}      |
| Phone Number  | {{ $contactForm->phone_number }}      |
| Message       | {{ $contactForm->message }}      |
| Sent At       | {{ $contactForm->created_at->format('d F, Y h:i A') }}      |
</x-mail::table>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
