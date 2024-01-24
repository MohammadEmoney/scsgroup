<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $full_name;
    public $email;
    public $subject;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submitFrom()
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'subject' => 'required|string|max:255|min:3',
            'message' => 'required|min:100|max:1000',
        ]);

        Contact::create($validatedData);

        $this->reset();

        $text = "Thank you for reaching out to us regarding your website creation. We appreciate your interest and look forward to assisting you in bringing your vision to life.";

        $this->dispatchBrowserEvent('swal:modal', [
            'icon' => 'success',
            'title' => 'Your message has been sent!',
            'text' => $text,
            'timerProgressBar' => true,
            'timer' => 20000,
            'confirmButtonText' => '<i class="fa fa-thumbs-up"></i> ' . __('Close'),
            'width' => 500,
        ]);
    }
}
