<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

#[Layout('layouts.app')]
#[Title('Contact Us')]
class ContactPage extends Component
{
    public function render()
    {
        return view('livewire.contact-page');
    }
}
