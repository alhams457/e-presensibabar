<?php

namespace App\Livewire\BackEnd;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

class Menus extends Component
{

    #[Layout('components.layouts.backed_end.backed_end')]
    
    #[Computed]
    public function menus(){
        return Menu::getActiveMenuForUser(Auth::user()->usertype);
   }
   
    public function render()
    {
        return view('livewire.backend.menus');
        
    }
}
