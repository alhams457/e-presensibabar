<?php

namespace App\Livewire\BackedEnd;

use Livewire\Component;

class BackedEnd extends Component
{ 
    public function render()
    {
        return view('livewire.backed_end.backed-end')->layout('components.layouts.backed_end.backed_end');      
    }
}
