<?php

namespace App\Livewire\BackEnd\RekapData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class RekapAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Rekap Data ASN';
        return view('livewire.backend.rekap_data.rekap_asn',['title' => $title]);
    }
}
