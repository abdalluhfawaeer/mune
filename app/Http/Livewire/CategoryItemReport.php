<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use App\Models\Mune;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class CategoryItemReport extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshSalesReport' => '$refresh'];
    public $menu = [];
    public $menu_id = 0;
    public $count_act = 0;
    public $count_item = 0;

    public function render()
    {
        return view('livewire.category-item-report',['list' => $this->query()]);
    }

    public function mount() {
        $this->menu = Mune::select('id','name')->get();
    }

    public function query() {
        $list = Category::select([
            'category.name_ar',
            'category.name_en',
            DB::raw('count(items.id) as count_avtive'),
        ]);;

        $list = $list->leftJoin('items','category.id','items.cat_id');

        $list = $list->where('menu_id',$this->menu_id)->groupBy('category.id')->orderBy('category.id','DESC')->paginate(10);

        $this->count_act = Category::where('menu_id',$this->menu_id)->count();
        $this->count_item = Item::join('category','category.id','items.cat_id')->where('menu_id',$this->menu_id)->count();
        $this->resetPage();
        return $list;
    }
}
