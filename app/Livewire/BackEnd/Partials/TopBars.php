<?php

namespace App\Livewire\BackEnd\Partials;

use Livewire\Component;
use Livewire\Attributes\Layout;

class TopBars extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        return view('livewire.backend.partials.top-bars');
    }
}
