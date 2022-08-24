<?php

namespace App\Http\Livewire;

use App\Models\Mune;
use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $menu_id = 0;

    protected $listeners = ['refreshOrderList' => '$refresh'];

    public function mount($id) {
        if ($id == 0) {
            $this->menu_id = Mune::where('user_id',auth()->user()->id)->first()->id;
        } else {
            $this->menu_id = $id;
        }
    }

    public function render()
    {
        return view('livewire.order-list',[
            'list' => $this->query()
        ]);
    }

    public function query()
    {
        $list = Order::select('orders.id as order_id','orders.*','customer.*');

        $list = $list->join('customer','customer.id','orders.customer_id')->where('orders.menu_id',$this->menu_id);

        $list = $list->orderBy('orders.id','desc')->paginate(10);
        $this->resetPage();
        return  $list;
    }
}
