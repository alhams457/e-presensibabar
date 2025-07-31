<?php

namespace App\Livewire\BackEnd\Partials;

use Livewire\Component;
use Livewire\Attributes\Layout;

class LeftBars extends Component
{           
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        return view('livewire.backend.partials.left-bars');
    }
}
