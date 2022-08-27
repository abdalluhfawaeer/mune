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

    public function mount($id) {
        $this->order_id = $id;
        $this->order = Order::with('customer')->where('id',$id)->first();
        $this->order_details = OrderDetail::where('order_id',$this->order->id)->get();
        $this->order_history = Order::where('customer_id',$this->order->customer->id)->get();
    }
    
    public function render()
    {
        return view('livewire.order-details');
    } 

}
