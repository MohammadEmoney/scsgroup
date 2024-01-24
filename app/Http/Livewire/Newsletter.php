<?php

namespace App\Http\Livewire;

use App\Models\Newsletter as ModelsNewsletter;
use App\Traits\SettingsTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Newsletter extends Component
{
    use SettingsTrait;

    public $email;

    public function render()
    {
        $settings = $this->settings(app()->getLocale());
        return view('livewire.newsletter', compact('settings'));
    }

    public function saveEmail()
    {
        $validatedData = $this->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        ModelsNewsletter::create($validatedData);

        $this->reset('email');

        $this->dispatchBrowserEvent('swal:modal', [
            'icon' => 'success',
            'title' => 'Thank you for subscribing!',
            'timerProgressBar' => true,
            'timer' => 20000,
            'confirmButtonText' => '<i class="fa fa-thumbs-up"></i> ' . __('Close'),
            'width' => 500,
        ]);
    }
}
