<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Contact Us')]
class TestimonialsPage extends Component
{
    public function render()
    {
        return view('livewire.testimonials-page');
    }
}
