<?php

namespace App\Livewire\BackEnd\FileDownload;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Apk extends Component
{
    #[Layout('components.layouts.backed_end.backed_end')]   
    public function render()
    {
        $title = 'Apk';
        return view('livewire.backend.file_download.apk',['title' => $title]);
    }
}
