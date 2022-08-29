<?php

namespace App\Http\Livewire;

use App\Models\Add;
use App\Models\Category;
use App\Models\Item;
use App\Models\Mune;
use App\Models\Variation;
use App\Models\VariationsAdd;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddItem extends Component
{
    use WithFileUploads;

    public $category = [];
    public $photo;
    public $status = 'active';
    public $name_ar = '';
    public $name_en = '';
    public $price = '';
    public $calories = '';
    public $desc = '';
    public $cat = '';
    public $menu = '';

    //livewire form repeater
    public $title = [];
    public $title_en = [];
    public $name = [];
    public $name_en_a = [];
    public $price_a = [];
    public $req = [];
    public $adds_name = [];
    public $adds_name_en = [];
    public $adds_price = [];

    protected $rules = [
        'name_ar' => 'required',
        'name_en' => 'required',
        'cat' => 'required',
        'price' => 'required',
        'photo' => 'required',
    ];

    public function mount() {
        $this->menu = Mune::with('user')->where('user_id',Auth()->user()->id)->first();
        $this->category = Category::where('menu_id',$this->menu->id)->get();
    }

    public function save() {
        $this->validate();

        $img = empty($this->photo) ? $this->img : $this->photo->store('public/'.$this->menu->id);
        $img = str_replace('public/','',$img);

        $item_id = Item::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'img' => $img,
            'desc' => $this->desc,
            'calories' => $this->calories,
            'staus' => $this->status,
            'price' => $this->price,
            'cat_id' => $this->cat,
        ])->id;

        foreach ($this->title as $key => $value) {
            $variation_id = Variation::create([
                'title_ar' => $this->title[$key] ?? 0,
                'title_en'=> $this->name_en_a[$key] ?? 0,
                'req' => $this->req[$key] ?? 0,
                'sort' => $key,
                'item_id' => $item_id
            ])->id;

            if ($key == 0) {
                for($i=0 ; $i <= 3; $i++) {
                    if (!empty($this->name[$i])) {
                        VariationsAdd::create([
                            'title_ar' => $this->name[$i] ?? 0,
                            'title_en' => $this->name_en_a[$i] ?? 0,
                            'price' => $this->price_a[$i] ?? 0,
                            'sort' => $i,
                            'variations_id' => $variation_id
                        ]);
                    }
                }
            }
            
            if ($key == 1) {
                for($i=4 ; $i <= 7 ;$i++) {
                    if (!empty($this->name[$i])) {
                        VariationsAdd::create([
                            'title_ar' => $this->name[$i] ?? 0,
                            'title_en' => $this->name_en_a[$i] ?? 0,
                            'price' => $this->price_a[$i] ?? 0,
                            'sort' => $i,
                            'variations_id' => $variation_id
                        ]);
                    }
                }
            } 

            if ($key == 2) {
                for($i = 8 ; $i <= 11 ; $i++) {
                    if (!empty($this->name[$i])) {
                        VariationsAdd::create([
                            'title_ar' => $this->name[$i] ?? 0,
                            'title_en' => $this->name_en_a[$i] ?? 0,
                            'price' => $this->price_a[$i] ?? 0,
                            'sort' => $i,
                            'variations_id' => $variation_id
                        ]);
                    }
                }
            } 
        }

        for($i = 0 ; $i <= 15 ; $i++) {
            if (!empty($this->adds_name[$i])) {
                Add::create([
                    'name_ar' => $this->adds_name[$i] ?? 0,
                    'name_en' => $this->adds_name_en[$i] ?? 0,
                    'price' => $this->adds_price[$i] ?? 0,
                    'sort' => $i,
                    'item_id' => $item_id
                ]);
            }
        }
        
        session()->flash('message', __('text.message'));
        $this->reset([
            'name_ar',
            'name_en',
            'photo',
            'desc',
            'status',
            'price',
            'cat',
            'calories',
            'adds_name',
            'adds_name_en',
            'adds_price',
            'name',
            'name_en_a',
            'price_a',
            'title',
            'name_en_a',
            'req',
        ]);
    }
}
