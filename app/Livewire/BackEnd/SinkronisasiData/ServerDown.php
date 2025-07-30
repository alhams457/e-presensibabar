<?php

namespace App\Livewire\BackEnd\SinkronisasiData;

use Livewire\Component;
use Livewire\Attributes\Layout;

class ServerDown extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]   
    public function render()
    {
        $title = 'Server Down';
        return view('livewire.backend.sinkronisasi_data.server_down',['title' => $title]);
    }
}
