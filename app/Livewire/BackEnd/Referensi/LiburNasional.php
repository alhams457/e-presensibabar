<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class LiburNasional extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Libur Nasional';
        return view('livewire.backend.referensi.libur_nasional',['title' => $title]);
    }
}
