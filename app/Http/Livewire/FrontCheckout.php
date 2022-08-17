<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mune;

class FrontCheckout extends Component
{
    public $menu = [];

    public function mount($id ,$name) {
        $this->menu = Mune::where('id',$id)->first();
    }

    public function render()
    {
        return view('livewire.front-checkout');
    }
}
