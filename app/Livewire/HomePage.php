<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\On;

#[Layout('layouts.app')]
#[Title('Merallin')]
class HomePage extends Component
{
    public bool $aboutLoaded = false;
    public bool $servicesLoaded = false;
    public bool $portfolioLoaded = false;
    public bool $clientsLoaded = false;

    #[On('loadSection')]
    public function loadSection($section)
    {
        if ($section === 'about') $this->aboutLoaded = true;
        if ($section === 'services') $this->servicesLoaded = true;
        if ($section === 'portfolio') $this->portfolioLoaded = true;
        if ($section === 'clients') $this->clientsLoaded = true;
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
