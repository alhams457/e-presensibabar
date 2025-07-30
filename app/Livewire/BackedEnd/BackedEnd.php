<?php

namespace App\Livewire\BackedEnd;

use App\Models\Menu;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
class BackedEnd extends Component
{ 
    // public $menu = [];
    #[Layout('components.layouts.backed_end.backed_end')]
    
    public function render()
    {
        // $user = Auth::user();
        // $menu = $user->type->menu;
        return view('livewire.backed_end.backed-end');      
    }
}
