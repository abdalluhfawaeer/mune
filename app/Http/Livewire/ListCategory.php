<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Mune;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ListCategory extends Component
{
    use WithPagination,WithFileUploads;

    public $name_ar = '';
    public $name_en = '';
    public $status = 'active';
    public $status_search = '';
    public $name_ar_search = '';
    public $name_en_search = '';
    public $photo;
    public $img = '';

    public $menu;

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'name_ar' => 'required',
        'name_en' => 'required',
    ];

    public function mount() {
        $this->menu = Mune::with('user')->where('user_id',Auth()->user()->id)->first();
    }

    public function render()
    {
        return view('livewire.list-category',[
            'list' => $this->query()
        ]);
    }

    public function save() { 
        $this->validate();
        $logo = empty($this->photo) ? $this->img : $this->photo->store('public/'.$this->menu->id);
        $logo = str_replace('public/','',$logo);
        Category::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'staus' => $this->status,
            'menu_id' => $this->menu->id,
            'img' => $logo,
        ]);
        session()->flash('message', 'Post successfully updated.');
        $this->reset(['name_ar','name_en','photo']);
    }

    public function query() {
        $list = Category::where('menu_id',$this->menu->id);

        if (!empty($this->status_search)) {
            $list = $list->where('staus',$this->status_search);
        }

        if (!empty($this->name_ar_search)) {
            $list = $list->where('name_ar',$this->name_ar_search);
        }

        if (!empty($this->name_en_search)) {
            $list = $list->where('name_en',$this->name_en_search);
        }
        $this->resetPage();
        return  $list->paginate(5);
    }

    public function delete($id) {
        Category::where('id',$id)->delete();
    }

    public function set_data($id) {
        $cat = Category::where('id',$id)->first();
        $this->name_ar = $cat->name_ar;
        $this->name_en = $cat->name_en;
        $this->status = $cat->staus;
        $this->img = $cat->img;
    }

    public function edit($id) {
        $this->validate();
        $logo = empty($this->photo) ? $this->img : $this->photo->store('public/'.$this->menu->id);
        $logo = str_replace('public/','',$logo);

        Category::where('id',$id)->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'staus' => $this->status,
            'img' => $logo,
        ]);
        session()->flash('message', 'Post successfully updated.');
    }
}
