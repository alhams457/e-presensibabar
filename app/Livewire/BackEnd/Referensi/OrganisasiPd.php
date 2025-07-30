<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class OrganisasiPd extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Organisasi PD';
        return view('livewire.backend.referensi.organisasi_pd',['title' => $title]);
    }
}
