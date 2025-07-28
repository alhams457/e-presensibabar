<?php

namespace App\Livewire\FrontEnd;

use Livewire\Component;
use Livewire\Attributes\Layout;

class FrontEnd extends Component
{
    #[Layout('components.layouts.fronted_end.fronted_end')]
    public function render()
    {
        $title = 'E-Presensi Bangka Barat';
        return view('livewire.fronted_end.fronted-end', compact('title'));
    }
}
