<?php

namespace App\Livewire\BackEnd\SinkronisasiData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class DataPresensiNonAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Data Presensi Non ASN';
        return view('livewire.backend.sinkronisasi_data.data_presensi_non_asn',['title' => $title]);
    }
}
