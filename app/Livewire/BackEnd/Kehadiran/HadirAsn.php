<?php

namespace App\Livewire\BackEnd\Kehadiran;

use Livewire\Component;
use Livewire\Attributes\Layout;

class HadirAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Hadir ASN';
        return view('livewire.backend.kehadiran.hadir_asn',['title' => $title]);
    }
}
