<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Models\Item;
use App\Models\Mune;

class EditItem extends Component
{
    use WithFileUploads;

    public $category = [];

    public function mount() {
        $this->menu = Mune::with('user')->where('user_id',Auth()->user()->id)->first();
        $this->category = Category::where('menu_id',$this->menu->id)->get();
    }

    public function render()
    {
        return view('livewire.edit-item'); 
    }
}
