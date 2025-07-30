<?php

namespace App\Livewire\BackEnd\Kehadiran;

use Livewire\Component;
use Livewire\Attributes\Layout;

class HadirNonAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]   
    public function render()
    {
        $title = 'Hadir Non ASN';
        return view('livewire.backend.kehadiran.hadir_non_asn',['title' => $title]);
    }
}
