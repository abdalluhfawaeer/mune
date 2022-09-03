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
    public $start_date = '';
    public $end_date = '';
    public $id_mune = '';
    public $name = '';
    public $status = '';
    public $mobile = '';

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
        $list = Order::select('orders.id as order_id','orders.*','customer.*','orders.created_at as order_date');
        $list = $list->join('customer','customer.id','orders.customer_id')->where('orders.menu_id',$this->menu_id);

        if (!empty($this->id_mune)) {
            $list = $list->where('orders.id', $this->id_mune);
        }

        if (!empty($this->name)) {
            $list = $list->where('customer.name', 'like', '%' . $this->name . '%');
        }

        if (!empty($this->mobile)) {
            $list = $list->where('customer.mobile', 'like', '%' . $this->mobile . '%');
        }

        if (!empty($this->status)) {
            $list = $list->where('orders.status', $this->status);
        }

        if (!empty($this->start_date)) {
            $list = $list->whereBetween('orders.created_at',[$this->start_date,$this->end_date]);
        }


        $list = $list->orderBy('orders.id','desc')->paginate(10);
        $this->resetPage();
        return  $list;
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}
