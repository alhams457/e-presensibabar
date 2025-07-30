<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class KordinatPd extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Kordinat PD';
        return view('livewire.backend.referensi.kordinat_pd',['title' => $title]);
    }
}
