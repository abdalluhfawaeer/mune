<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Addition;
use App\Models\Mune;

class ConractFront extends Component
{
    public $menu = [];
    public $addition = '';

    public function mount($id ,$name) {
        $this->menu = Mune::with('user')->where('id',$id)->first();
        $this->addition = Addition::where('menu_id',$this->menu->id)->first();
    }
    
    public function render()
    {
        return view('livewire.conract-front');
    }
}
