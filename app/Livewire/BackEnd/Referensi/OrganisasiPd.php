<?php

namespace App\Livewire\BackEnd\Referensi;

use Livewire\Component;
use Livewire\Attributes\Layout;

class OrganisasiPd extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]
    public function render()
    {
        $title = 'E-Presensi';
        $title_active = 'Organisasi PD';
        $title_menu = 'Referensi';
        $items = [
            [
                    'title' => 'Referensi',
                'url' => '/referensi'
            ],
            [
                'title' => 'Organisasi PD',
                'url' => '/referensi/organisasi_pd'
            ]
        ];
        $data = [
            'title' => $title,
            'title_active' => $title_active,
            'title_menu' => $title_menu,
            'items' => $items
        ];
        return view('livewire.backend.referensi.organisasi_pd', $data);
    }
}
