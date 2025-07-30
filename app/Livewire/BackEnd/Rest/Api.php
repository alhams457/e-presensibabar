<?php

namespace App\Livewire\BackEnd\Rest;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Api extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]   
    public function render()
    {
        $title = 'API';
        return view('livewire.backend.rest.api',['title' => $title]);
    }
}
