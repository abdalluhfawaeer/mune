<?php

namespace App\Http\Livewire;

use App\Models\Mune;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Livewire\Component;

class OrderDetails extends Component
{
    public $order_id = 0;
    public $order = [];
    public $order_details = [];
    public $order_history = [];
    public $total = 0;
    public $status_befor = 0; 
    public $menu = []; 

    protected $listeners = ['refreshOrderDetails' => '$refresh'];

    public function mount($id) {
        $this->order_id = $id;
        $this->order = Order::with('customer')->where('id',$id)->first();
        $this->order_details = OrderDetail::where('order_id',$this->order->id)->get();
        $this->order_history = Order::where('customer_id',$this->order->customer->id)->get();
        $this->menu = Mune::where('id',$this->order->menu_id)->first();
    }
    
    public function render()
    { 
        return view('livewire.order-details');
    } 

    public function changeStatus($status) {
        $this->status_befor = $this->order->status;
        Order::where('id',$this->order_id)->update([
            'status' => $status,
            'status_befor' => $this->status_befor,
        ]);
        $this->emit('refreshOrderDetails');
    }
}
