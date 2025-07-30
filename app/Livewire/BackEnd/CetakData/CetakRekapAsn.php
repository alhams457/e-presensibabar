<?php

namespace App\Livewire\BackEnd\CetakData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class CetakRekapAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Cetak Rekap ASN';
        return view('livewire.backend.cetak_data.cetak_rekap_asn',['title' => $title]);
    }
}
