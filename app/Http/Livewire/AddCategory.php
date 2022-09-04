<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\Mune;

class AddCategory extends Component
{
    use WithFileUploads;

    public $img = '';   
    public $name_ar = '';
    public $name_en = '';
    public $status = '';
    public $id_c = '';

    protected $rules = [
        'name_ar' => 'required',
        'name_en' => 'required',
        'img' => 'required',
        'status' => 'required',
    ];

    public function mount($id) {
        $this->id_c = $id;
        if ($id) {
            $category = Category::where('id',$id)->first();
            $this->name_ar = $category->name_ar;
            $this->img = $category->img;
            $this->name_en = $category->name_en;
            $this->status = $category->staus;
        }
    }

    public function render()
    {
        return view('livewire.add-category');
    }

    public function save() { 
        $menu_id = Mune::with('user')->where('user_id',Auth()->user()->id)->first()->id;
        $this->validate();
        $logo = !method_exists($this->img, 'temporaryUrl') ? $this->img : $this->img->store('public/'.$menu_id);
        $logo = str_replace('public/','',$logo);
        Category::updateOrCreate([
            'menu_id' => $menu_id,
            'id' => $this->id_c,
        ],[
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'staus' => $this->status,
            'menu_id' => $menu_id,
            'img' => $logo,
        ]);
        session()->flash('message', __('text.message'));
        if ($this->id_c == 0 ) {
            $this->reset(['name_ar','name_en','img','status']);
        }
    }

}
