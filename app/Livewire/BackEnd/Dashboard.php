<?php

namespace App\Livewire\BackEnd;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public $data;
    public function render()
    {
        $title = 'E-Presensi';
        $title_active = 'Dashboard';
        $title_menu = 'Dashboard';
        $items = [
            [
                'title' => 'Dashboard',
                'url' => '/dashboard'
            ],  
        ];
        $data = [
            'title' => $title,
            'title_active' => $title_active,
            'title_menu' => $title_menu,
            'items' => $items
        ];
        return view('livewire.backend.dashboard', $data);

    }
}
