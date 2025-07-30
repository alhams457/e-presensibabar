<?php

namespace App\Livewire\BackEnd;

use Livewire\Component;
use Livewire\Attributes\Layout;

class ResetPns extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        return view('livewire.backend.reset-pns');
    }
}
