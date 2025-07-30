<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class JamAbsen extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'Jam Absen';
        return view('livewire.backend.referensi.jam_absen',['title' => $title]);
    }
}
