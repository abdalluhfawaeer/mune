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
    use WithPagination;

    public $status = 'active';
    public $status_search = '';
    public $name_ar_search = '';
    public $name_en_search = '';
    public $photo;
    public $img = '';

    public $menu;

    protected $paginationTheme = 'bootstrap';

    public function mount() {
        $this->menu = Mune::with('user')->where('user_id',Auth()->user()->id)->first();
    }

    public function render()
    {
        return view('livewire.list-category',[
            'list' => $this->query()
        ]);
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

        $list = $list->orderBy('id','desc')->paginate(5);
        $this->resetPage();
        return  $list;    
    }

    public function delete($id) {
        $status = Category::where('id',$id)->first()->staus;
        Category::where('id',$id)->update([
            'staus' => ($status == 'not_active') ? 'active' : 'not_active',
        ]);
    }
}
