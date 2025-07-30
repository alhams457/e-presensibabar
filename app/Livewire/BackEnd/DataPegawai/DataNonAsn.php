<?php

namespace App\Livewire\BackEnd\DataPegawai;

use Livewire\Component;
use Livewire\Attributes\Layout;

class DataNonAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Data Non ASN';
        return view('livewire.backend.data_pegawai.data_non_asn',['title' => $title]);
    }
}
