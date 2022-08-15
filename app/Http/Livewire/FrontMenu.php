<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use App\Models\Mune;
use App\Models\Variation;
use Livewire\Component;

class FrontMenu extends Component
{
    public $menu = [];
    public $category = [];
    public $variations = [];
    public $open = false;
    public $photo = '';
    public $title = '';
    public $price = 0;
    public $desc = '';
    public $item_id = '';

    public function mount($id ,$name) {
        $this->menu = Mune::where('id',$id)->first();
        $this->category = Category::where('menu_id',$id)->where('staus','active')->get();
    }

    public function render()
    {
        return view('livewire.front-menu');
    }

    public function item($cat_id) {
        return Item::where('cat_id',$cat_id)->where('staus','active')->get();
    }

    public function modal($item_id) {
        $item = Item::where('id',$item_id)->first();
        $this->photo = $item->img; 
        $this->title = $item->name_en; 
        $this->price = $item->price; 
        $this->desc = $item->desc; 
        $this->item_id = $item->id; 
        $this->variations = Variation::with('variations_adds')->where('item_id',$item_id)->get();
        $this->open = true;
    }

    public function close_model() {
        $this->open = false;
    }
}
