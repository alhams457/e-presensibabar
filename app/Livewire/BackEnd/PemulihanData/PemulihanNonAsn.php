<?php

namespace App\Livewire\BackEnd\PemulihanData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class PemulihanNonAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Pemulihan Data Non ASN';
        return view('livewire.backend.pemulihan_data.pemulihan_non_asn',['title' => $title]);
    }
}
