<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Add;
use App\Models\Category;
use App\Models\Item;
use App\Models\Mune;
use App\Models\Variation;
use App\Models\Addition;

class ThemeTwo extends Component
{
    public $menu = [];
    public $category = [];
    public $items = [];
    public $variations = [];
    public $adds = [];
    public $open = false;
    public $photo = '';
    public $title = '';
    public $price = 0;
    public $desc = '';
    public $item_id = '';
    public $i = '';
    public $type = '';
    public $addition = '';

    public function mount($id ,$name) {
        $this->menu = Mune::where('id',$id)->first();
        $this->category = Category::where('menu_id',$id)->where('staus','active')->get();
        $this->addition = Addition::where('menu_id',$this->menu->id)->first();
        $this->type = $this->addition->type;
        $this->item($this->category[0]->id);
    }

    public function render()
    {
        return view('livewire.theme-two');  
    }

    public function item($cat_id) {
        $this->items = Item::where('cat_id',$cat_id)->where('staus','active')->get();
    }

    public function modal($item_id) {
        $item = Item::where('id',$item_id)->first();
        $this->photo = $item->img; 
        if (app()->getLocale() == 'en') {
            $this->title = $item->name_en; 
        } else {
            $this->title = $item->name_ar; 
        }
        $this->price = $item->price; 
        $this->desc = $item->desc; 
        $this->item_id = $item->id; 
        $this->variations = Variation::with('variations_adds')->where('item_id',$item_id)->get();
        $this->adds = Add::where('item_id',$item_id)->get();
        $this->open = true;
    }

    public function close_model() {
        $this->open = false;
    }
}
