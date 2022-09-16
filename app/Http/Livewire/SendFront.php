<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use App\Models\Mune;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Addition;

class SendFront extends Component
{
    public $menu = [];
    public $addition = '';

    public function mount($id ,$name) {
        $this->menu = Mune::with('user')->where('id',$id)->first();
        $this->addition = Addition::where('menu_id',$this->menu->id)->first();
    }

    public function render()
    {
        return view('livewire.send-front');
    }

    public function sends($name, $mobile,$data ,$type = 'from' ,$number_table = 0,$address = '')
    {
        $mobile = '962'.substr($mobile, -9);
        $total = 0;
        $customer = Customer::where('mobile',$mobile)->where('menu_id',$this->menu->id)->firstOr(function() use($name,$mobile) {
            return Customer::create([
                'name' => $name,
                'mobile' => $mobile,
                'menu_id' => $this->menu->id
            ]);
        });

        $order_id = Order::create([
            'total' => 0,
            'type' => $type,
            'delviry' => 0,
            'status' => 'new',
            'menu_id' => $this->menu->id,
            'customer_id' => $customer->id,
            'table_number' => $number_table,
            'address' => $address,
        ])->id;

        foreach($data as $item) {
            OrderDetail::create([
                'order_id' => $order_id,
                'item_id' => $item['item_id'],
                'item_img' => $item['item_img'],
                'item_title' => $item['item_title'],
                'qty' => $item['qty'],
                'price' => $item['item_price'],
                'acc' => $item['acc'],
                'notes' => $item['notes'],
            ]);
            $total += $item['item_price'];
        }

        Order::where('id',$order_id)->update([
            'total' => $total
        ]);
        
        $this->emit('order_id',$order_id);
    }
}
