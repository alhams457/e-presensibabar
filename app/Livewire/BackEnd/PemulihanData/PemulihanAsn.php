<?php

namespace App\Livewire\BackEnd\PemulihanData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class PemulihanAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]   
    public function render()
    {
        $title = 'Pemulihan Data ASN';
        return view('livewire.backend.pemulihan_data.pemulihan_asn',['title' => $title]);
    }
}
