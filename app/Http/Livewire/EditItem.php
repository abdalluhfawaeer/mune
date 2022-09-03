<?php

namespace App\Http\Livewire;

use App\Models\Add;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Models\Item;
use App\Models\Mune;
use App\Models\Variation;
use App\Models\VariationsAdd;

class EditItem extends Component
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
    public $item_id = '';
    public $img = '';

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
    ];

    public function mount($item_id) {
        $this->menu = Mune::with('user')->where('user_id',Auth()->user()->id)->first();
        $this->category = Category::select('id','name_ar','name_en')->where('menu_id',$this->menu->id)->get();
        $item = Item::where('id',$item_id)->first();
        $this->name_ar = $item->name_ar;
        $this->name_en = $item->name_en;
        $this->cat = $item->cat_id;
        $this->price = $item->price;
        $this->calories = $item->calories;
        $this->desc = $item->desc;
        $this->status = $item->staus;
        $this->img = $item->img;
        $this->photo = $item->img;
        $this->item_id = $item_id;
        $variation = Variation::with('variations_adds')->where('item_id',$item_id)->get();
        $adds = Add::where('item_id',$item_id)->get();
        foreach ($variation as $value) {
            $this->title[$value->sort] = $value->title_ar;
            $this->title_en[$value->sort] = $value->title_en;
            $this->req[$value->sort] = $value->req;
            foreach ($value->variations_adds as $add) {
                $this->name[$add->sort] = $add->title_ar;
                $this->name_en_a[$add->sort] = $add->title_en;
                $this->price_a[$add->sort] = $add->price;
            }
        }
        foreach ($adds as $value) {
            $this->adds_name[$value->sort] = $value->name_ar;
            $this->adds_name_en[$value->sort] = $value->name_en;
            $this->adds_price[$value->sort] = $value->price;
        }
    }

    public function render()
    {
        return view('livewire.edit-item');
    }

    public function save() {
        $this->validate();

        $img = empty($this->photo) ? $this->img : $this->photo->store('public/'.$this->menu->id);
        $img = str_replace('public/','',$img);
        $item_id = $this->item_id;
        Item::where('id',$this->item_id)->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'img' => $img,
            'desc' => $this->desc,
            'calories' => $this->calories,
            'staus' => $this->status,
            'price' => $this->price,
            'cat_id' => $this->cat,
        ]);

        $ids = Variation::where('item_id',$this->item_id)->get()->pluck('id');
        Variation::where('item_id',$this->item_id)->delete();
        Add::where('item_id',$this->item_id)->delete();
        VariationsAdd::whereIn('variations_id',$ids)->delete();
        foreach ($this->title as $key => $value) {
            $variation_id = Variation::create([
                'title_ar' => $this->title[$key] ?? '',
                'title_en'=> $this->title_en[$key] ?? '',
                'req' => $this->req[$key] ?? '',
                'sort' => $key,
                'item_id' => $item_id
            ])->id;

            if ($key == 0) {
                for($i=0 ; $i <= 3; $i++) {
                    if (!empty($this->name[$i])) {
                        VariationsAdd::create([
                            'title_ar' => $this->name[$i] ?? '',
                            'title_en' => $this->name_en_a[$i] ?? '',
                            'price' => $this->price_a[$i] ?? '',
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
    }
}
