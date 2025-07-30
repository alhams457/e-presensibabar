<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class ResetNonAsn extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Reset Non ASN';
        return view('livewire.backend.referensi.reset_non_asn',['title' => $title]);
    }
}
