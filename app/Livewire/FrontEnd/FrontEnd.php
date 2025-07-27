<?php

namespace App\Livewire\FrontEnd;

use Livewire\Component;

class FrontEnd extends Component
{
    public function daftar()
    {
        return view('livewire.fronted_end.daftar')->layout('components.layouts.fronted_end.fronted_end');
    }

    public function lupaKataSandi()
    {
        return view('livewire.fronted_end.lupa-kata-sandi')->layout('components.layouts.fronted_end.fronted_end');
    }

    public function render()
    {
        return view('livewire.fronted_end.fronted-end')->layout('components.layouts.fronted_end.fronted_end');
    }
}
