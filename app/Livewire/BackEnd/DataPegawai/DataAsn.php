<?php

namespace App\Livewire\BackEnd\DataPegawai;

use Livewire\Component;
use Livewire\Attributes\Layout;

class DataAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Data ASN';
        return view('livewire.backend.data_pegawai.data_asn',['title' => $title]);  
    }
}
