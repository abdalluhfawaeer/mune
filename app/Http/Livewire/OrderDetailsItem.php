<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetail;
use Livewire\Component;

class OrderDetailsItem extends Component
{
    public $item = [];
    public $qty = 0;
    public $acc = [];
    protected $listeners = ['OrderDetailsItem' => '$refresh'];

    public function mount($item) {
        $this->item = $item;    
        $this->qty = $item->qty;    
        $this->acc = $item->acc;  
    }

    public function render()
    {
        return view('livewire.order-details-item');
    }

    public function delete($id) {
        $order_id = $this->item->order_id;
        OrderDetail::where('id',$id)->delete();
        $total = OrderDetail::where('order_id',$order_id)->sum('price');
        Order::where('id',$order_id)->update([
            'total' => $total
        ]);
        $this->emit('refreshOrderDetails');
    }

    public function update($id) {
        $new_price = $this->qty * $this->item->price;
        $order_id = $this->item->order_id;
        OrderDetail::where('id',$id)->update([
            'price' => $new_price,
            'qty' => $this->qty
        ]);
        $total = OrderDetail::where('order_id',$order_id)->sum('price');
        Order::where('id',$order_id)->update([
            'total' => $total
        ]);
        $this->emit('refreshOrderDetails');
    }

    public function deleteAcc($key)
    {
        $price = $this->acc[$key]['v_price'];
        $price = $price * $this->qty;
        $price = $this->item->price - $price;
        unset($this->acc[$key]);
        $order_id = $this->item->order_id;
        OrderDetail::where('id',$this->item->id)->update([
            'price' => $price,
            'acc' => $this->acc
        ]);
        $total = OrderDetail::where('order_id',$order_id)->sum('price');
        Order::where('id',$order_id)->update([
            'total' => $total
        ]);
        $this->emit('refreshOrderDetails');
    }
}
