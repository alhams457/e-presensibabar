<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class LokasiPd extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Lokasi PD';
        return view('livewire.backend.referensi.lokasi_pd',['title' => $title]);
    }
}
