<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mune;

class SendFront extends Component
{
    public $menu = [];

    public function mount($id ,$name) {
        $this->menu = Mune::with('user')->where('id',$id)->first();
    }

    public function render()
    {
        return view('livewire.send-front');
    }

    public function sends($name, $mobile,$data)
    {
    }
}
