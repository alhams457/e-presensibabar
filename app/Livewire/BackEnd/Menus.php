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
        $menus = Menu::getActiveMenuForUser(Auth::user()->usertype);
        return $menus;
   }
   
    public function render()
    {
        $menus = $this->menus(); // Call the menus method
    // dd($menus); // This will dump the menus data
    return view('livewire.backend.menus', ['menus' => $menus]);
        
    }
}
