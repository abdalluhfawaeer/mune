<?php

namespace App\Http\Livewire;

use App\Models\Mune;
use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class OrderToday extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $menu_id = 0;
    public $id_mune = '';
    public $name = '';
    public $status = '';
    public $type = '';
    public $mobile = '';
    
    protected $listeners = ['refreshOrderList' => '$refresh'];

    public function mount() {
        $this->menu_id = Mune::where('user_id',auth()->user()->id)->first()->id;
    }

    public function render()
    {
        return view('livewire.order-today',[
            'list' => $this->query()
        ]);
    }

    public function query()
    {
        $date = date('Y/m/d');
        $list = Order::select('orders.id as order_id','orders.*','customer.*','orders.created_at as order_date');

        $list = $list->join('customer','customer.id','orders.customer_id');
        $list = $list->whereDate('orders.created_at', Carbon::today());

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

        if (!empty($this->type)) {
            $list = $list->where('orders.type', $this->type);
        }

        $list = $list->orderBy('orders.id','desc')->where('orders.menu_id',$this->menu_id)->paginate(10);
        $this->resetPage();
        return  $list;
    }
}
