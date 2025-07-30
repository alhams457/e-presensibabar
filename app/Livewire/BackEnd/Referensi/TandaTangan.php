<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class TandaTangan extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Tanda Tangan';
        return view('livewire.backend.referensi.tanda_tangan',['title' => $title]);
    }
}
