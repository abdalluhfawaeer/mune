<?php

namespace App\Http\Livewire;

use App\Models\Counter;
use App\Models\Customer;
use Livewire\Component;
use App\Models\Mune;
use App\Models\Order;
use App\Models\User;
use App\Models\Viwe;
use Carbon\Carbon;
use App\Models\Addition;

class DashboardMenu extends Component
{
    public $user = [];
    public $menu = [];
    public $total_order = 0;
    public $total_order_jd = 0;
    public $start_date;
    public $end_date;
    public $total_view;
    public $total_view_real;
    public $order = [];
    public $customer = [];
    public $select_menu = [];
    public $select_menu_id = 0;
    public $qrdcode = '';
    public $menu_id = '';
    public $type = '';
    public $order_status = [];

    public function mount() {
        $this->select_menu = Mune::select('id','name')->get();
    }

    public function render()
    {
        if ($this->select_menu_id > 0) {
            $this->menu = Mune::where('id',$this->select_menu_id)->first();
            $this->user = User::where('id',$this->menu->user_id)->first();
            $addition = Addition::where('menu_id',$this->menu->id)->first();
        } elseif(Auth()->user()->role == 'mune') {
            $this->user = User::where('id',auth()->user()->id)->first();
            $this->menu = Mune::where('user_id',auth()->user()->id)->first();
            $addition = Addition::where('menu_id',$this->menu->id)->first();
        } elseif(Auth()->user()->role == 'admin') {
            $this->user = User::first();
            $this->menu = Mune::first();
            $addition = Addition::where('menu_id',$this->menu->id)->first();
        }
        $this->type = $addition->type ?? 'order';
        $this->query();
        $this->orderStatus();
        $this->qrdcode = 'qrcode_'.$this->menu->id.'.png';
        $this->menu_id = $this->menu->id;
        return view('livewire.dashboard-menu');
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function query() {
        $this->total_view = Viwe::where('menu_id',$this->menu->id);
        $this->total_view_real = Counter::where('menu_id',$this->menu->id);
        $this->total_order = Order::where('menu_id',$this->menu->id);
        $this->total_order_jd = Order::where('menu_id',$this->menu->id);
        $this->order = Order::join('customer','customer.id','orders.customer_id')->where('orders.menu_id',$this->menu->id);
        $this->customer = Customer::where('menu_id',$this->menu->id)->where('menu_id',$this->menu->id);

        if (!empty($this->start_date) && !empty($this->end_date)) {
            $this->total_view = $this->total_view->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->total_view_real = $this->total_view_real->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->total_order = $this->total_order->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->total_order_jd = $this->total_order_jd->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->order = $this->order->whereBetween('orders.created_at',[$this->start_date,$this->end_date]);
            $this->customer = $this->customer->whereBetween('created_at',[$this->start_date,$this->end_date]);
        }

        $this->total_view = $this->total_view->count();
        $this->total_view_real = $this->total_view_real->first()->counter ?? 0;
        $this->total_order = $this->total_order->count();
        $this->total_order_jd = $this->total_order_jd->sum('total');
        $this->order = $this->order->limit(6)->orderBy('orders.id','desc')->get();
        $this->customer = $this->customer->limit(6)->orderBy('id','desc')->get();
    }

    public function orderStatus() {
        $this->order_status = [
            'cancelled' => Order::where('status','cancelled')->where('menu_id',$this->menu->id),
            'cancelled_jd' => Order::where('status','cancelled')->where('menu_id',$this->menu->id),
            'confirmed' => Order::where('status','confirmed')->where('menu_id',$this->menu->id),
            'confirmed_jd' => Order::where('status','cancelled')->where('menu_id',$this->menu->id),
            'new' => Order::where('status','new')->where('menu_id',$this->menu->id),
            'new_jd' => Order::where('status','cancelled')->where('menu_id',$this->menu->id),
        ];

        if (!empty($this->start_date) && !empty($this->end_date)) {
            $this->order_status['cancelled'] = $this->order_status['cancelled']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->order_status['cancelled_jd'] = $this->order_status['cancelled_jd']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->order_status['confirmed'] = $this->order_status['confirmed']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->order_status['confirmed_jd'] = $this->order_status['confirmed_jd']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->order_status['new'] = $this->order_status['new']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->order_status['new_jd'] = $this->order_status['new_jd']->whereBetween('created_at',[$this->start_date,$this->end_date]);
        }

        $this->order_status['cancelled'] = $this->order_status['cancelled']->count();
        $this->order_status['cancelled_jd'] = $this->order_status['cancelled_jd']->sum('total');
        $this->order_status['confirmed'] = $this->order_status['confirmed']->count();
        $this->order_status['confirmed_jd'] = $this->order_status['confirmed_jd']->sum('total');
        $this->order_status['new'] = $this->order_status['new']->count();
        $this->order_status['new_jd'] = $this->order_status['new_jd']->sum('total');
    }
}
