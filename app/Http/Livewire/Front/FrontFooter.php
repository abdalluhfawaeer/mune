<?php

namespace App\Http\Livewire\Front;

use App\Models\Mune;
use Livewire\Component;
use App\Models\Addition;

class FrontFooter extends Component
{
    public $menu = [];
    public $type = [];
    public $theme = [];
    public $addition = [];

    public function mount($id ,$type ,$theme) {
        $this->menu = Mune::where('id',$id)->first();
        $this->type = $type;
        $this->theme = $theme;
        $this->addition = Addition::where('menu_id',$this->menu->id)->first();
    }

    public function render()
    {
        return view('livewire.front.front-footer');
    }
}
