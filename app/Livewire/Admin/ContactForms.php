<?php

namespace App\Livewire\Admin;

use App\Mail\ReplyContactFormMail;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class ContactForms extends Component
{
    use WithPagination;

    public $select_contact_form;
    public $contact_form_reply;

    public function selectContact(ContactForm $contact)
    {
        $this->select_contact_form = $contact;
    }

    public function removeForm()
    {
        $this->select_contact_form = null;
    }

    public function replyContactForm()
    {
        if ($this->contact_form_reply == null) {
            session()->flash('error', 'You have to enter a message');
            return;
        }

        $this->select_contact_form->replies()->create([
            'message' => $this->contact_form_reply
        ]);

        // send email to user
        Mail::to($this->select_contact_form->email)->send(new ReplyContactFormMail($this->select_contact_form, $this->contact_form_reply));

        $this->select_contact_form = null;
        session()->flash('success', 'Reply sent successfully');
    }

    #[Layout('components.layouts.admin-dashboard')]
    public function render()
    {
        return view('livewire.admin.contact-forms', [
            'contacts_form_entries' => ContactForm::latest()->paginate(15)
        ]);
    }
}
