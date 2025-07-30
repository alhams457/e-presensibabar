<?php

namespace App\Livewire\BackEnd\RekapData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class RekapNonAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Rekap Data Non ASN';
        return view('livewire.backend.rekap_data.rekap_non_asn',['title' => $title]);
    }
}
