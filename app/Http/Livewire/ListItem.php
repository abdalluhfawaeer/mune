<?php

namespace App\Http\Livewire;

use App\Models\Item;
use App\Models\Mune;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use App\Models\User;

class ListItem extends Component
{
    use WithPagination;
    public $menu_id = 0;
    public $name_ar;
    public $name_en;
    public $category_name_ar;
    public $category_name_en;
    public $status;

    protected $paginationTheme = 'bootstrap';

    public function mount() {
        $this->menu_id = Mune::where('user_id',Auth()->id())->first()->id;
    }

    public function render()
    {
        return view('livewire.list-item',['list' => $this->query()]); 
    }

    public function query() {
        $list = Item::select('items.*','items.id as id','category.menu_id','category.name_ar as c_name_ar','category.name_en as c_name_en')
            ->join('category','category.id','items.cat_id')
            ->where('category.menu_id',$this->menu_id);
        

        if (!empty($this->name_ar)) {
            $list = $list->where('items.name_ar', 'like', '%' . $this->name_ar . '%');
        }

        if (!empty($this->name_en)) {
            $list = $list->where('items.name_en', 'like', '%' . $this->name_en . '%');
        }

        if (!empty($this->category_name_ar)) {
            $list = $list->where('category.name_ar', 'like', '%' . $this->category_name_ar . '%');
        }

        if (!empty($this->category_name_en)) {
            $list = $list->where('category.name_en', 'like', '%' . $this->category_name_en . '%');
        }

        if (!empty($this->status)) {
            $list = $list->where('items.staus', $this->status);
        }


        $list = $list->paginate(6);
        $this->resetPage();
        return  $list;
    }

    public function delete($id) {
        $status = Item::where('id',$id)->first()->staus;
        Item::where('id',$id)->update([
            'staus' => ($status == 'not_active') ? 'active' : 'not_active',
        ]);
    }
}
