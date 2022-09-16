<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mune;
use App\Models\Addition;

class FrontCheckout extends Component
{
    public $menu = [];
    public $addition = '';

    public function mount($id ,$name) {
        $this->menu = Mune::where('id',$id)->first();
        $this->addition = Addition::where('menu_id',$this->menu->id)->first();
    }

    public function render()
    {
        return view('livewire.front-checkout');
    }
}
