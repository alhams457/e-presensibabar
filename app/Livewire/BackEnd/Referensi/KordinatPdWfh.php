<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;
    
class KordinatPdWfh extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Kordinat PD WFH';
            return view('livewire.backend.referensi.kordinat_pd_wfh',['title' => $title]);
    }
}
