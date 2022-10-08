<?php

namespace App\Http\Livewire\Front;

use App\Models\Mune;
use Livewire\Component;

class FrontHeader extends Component
{
    public $menu = [];
    public $type = [];

    public function mount($id ,$type) {
        $this->menu = Mune::where('id',$id)->first();
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.front.front-header');
    }
}
