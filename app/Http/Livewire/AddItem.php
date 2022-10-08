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
use App\Models\Addition;

class AddItem extends Component
{
    use WithFileUploads;

    public $category = [];
    public $photo = '';
    public $status = 'active';
    public $name_ar = '';
    public $name_en = '';
    public $price = '';
    public $calories = '';
    public $desc = '';
    public $cat = '';
    public $menu = '';
    public $type = '';

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

    public $inputs = [];
    public $inputs_a = [];
    public $i = 0;
    public $y = 0;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function add2($key,$y)
    {
        $y = $y + 1;
        $this->y = $y;
        $this->inputs_a[$key][] = $y;
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
        $i = $i + 1;
        unset($this->title[$i]);
    }

    public function remove2($key ,$ke)
    {
        unset($this->inputs_a[$ke][$key]);
    }

    public function mount() {
        $this->menu = Mune::with('user')->where('user_id',Auth()->user()->id)->first();
        $this->category = Category::where('menu_id',$this->menu->id)->where('staus','active')->get();
        $this->type = Addition::where('menu_id',$this->menu->id)->first()->type;
    }

    public function save() {
        $this->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'cat' => 'required',
            'price' => 'required',
            'photo' => 'required',
        ],[],[
            'name_ar' => trans('text.name_ar'),
            'name_en' => trans('text.name_en'),
            'cat' => trans('text.category'),
            'price' => trans('text.Price'),
            'photo' => trans('text.photo'),
        ]);

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
        $sort = 1;

        foreach ($this->title as $key => $value) {
            $variation_id = Variation::create([
                'title_ar' => $this->title[$key] ?? '',
                'title_en'=> $this->title_en[$key] ?? '',
                'req' => $this->req[$key] ?? 0,
                'sort' => $sort,
                'item_id' => $item_id
            ])->id;
            $sort = $sort + 1;
            if (!empty($this->name[$key])) {
                foreach ($this->name[$key] as $v => $name ) {
                    VariationsAdd::create([
                        'title_ar' => $this->name[$key][$v] ?? '',
                        'title_en' => $this->name_en_a[$key][$v] ?? '',
                        'price' => $this->price_a[$key][$v] ?? 0,
                        'sort' => 0,
                        'variations_id' => $variation_id
                    ]);
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
        $this->inputs = [];
        $this->inputs_a = [];
    }
}
