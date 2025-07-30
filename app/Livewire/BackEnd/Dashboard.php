<?php

namespace App\Livewire\BackEnd;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Dashboard';
        return view('livewire.backend.dashboard',['title' => $title]);

    }
}
