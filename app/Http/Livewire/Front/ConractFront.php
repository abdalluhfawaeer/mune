<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Addition;
use App\Models\Mune;

class ConractFront extends Component
{
    public $menu = [];
    public $addition = '';
    public $type = '';
    public $theme = '';

    public function mount($id ,$name) {
        $this->menu = Mune::with('user')->where('id',$id)->first();
        $this->addition = Addition::where('menu_id',$this->menu->id)->first();
        $this->type = $this->addition->type ?? '';
        $this->theme = $this->menu->color ?? '';    
    }
    
    public function render()
    {
        return view('livewire.front.conract-front');
    }
}
