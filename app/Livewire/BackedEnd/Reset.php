<?php

namespace App\Livewire\BackedEnd;

use Livewire\Component;

class Reset extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        return view('livewire.backed_end.admin.referensi.reset');
    }
}
