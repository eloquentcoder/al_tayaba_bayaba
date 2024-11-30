<?php

namespace App\Livewire\Home;

use App\Mail\ContactFormAlertMail;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{

    public $full_name;
    public $email;
    public $phone_number;
    public $message;

    public function submitForm()
    {
        $this->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $ContactForm = ContactForm::create([
            'name' => $this->full_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'message' => $this->message
        ]);

        // send email
        Mail::to(env('APP_ADMIN_EMAIL'))->send(new ContactFormAlertMail($ContactForm));

        session()->flash('success', 'Your message has been delivered successfully. You will be contacted soon.');
        $this->reset(['full_name', 'email', 'phone_number', 'message']);

    }


    public function render()
    {
        return view('livewire.home.contact-us');
    }
}
