<?php

namespace App\Livewire\BackEnd\RekapData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class HapusRekap extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Hapus Rekap';
        return view('livewire.backend.rekap_data.hapus_rekap',['title' => $title]);
    }
}
