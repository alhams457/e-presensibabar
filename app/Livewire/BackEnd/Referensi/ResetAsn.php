<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class ResetAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Reset ASN';
        return view('livewire.backend.referensi.reset_asn',['title' => $title]);
    }
}
