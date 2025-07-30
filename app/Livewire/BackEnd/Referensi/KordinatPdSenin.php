<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class KordinatPdSenin extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Kordinat PD Senin';
        return view('livewire.backend.referensi.kordinat_pd_senin',['title' => $title]);
    }
}
