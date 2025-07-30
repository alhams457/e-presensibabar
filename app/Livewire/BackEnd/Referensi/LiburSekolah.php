<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class LiburSekolah extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Libur Sekolah';
        return view('livewire.backend.referensi.libur_sekolah',['title' => $title]);
    }
}
