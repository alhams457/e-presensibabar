<?php

namespace App\Livewire\BackEnd\CetakData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class CetakRekapNonAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Cetak Rekap Non ASN';
        return view('livewire.backend.cetak_data.cetak_rekap_non_asn',['title' => $title]);
    }
}
