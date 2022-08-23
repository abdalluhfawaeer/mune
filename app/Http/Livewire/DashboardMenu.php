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

    public function mount() {
        $this->start_date = new Carbon('first day of this month');
        $this->end_date = new Carbon('last day of this month');
    }

    public function render()
    {
        $this->user = User::where('id',auth()->user()->id)->first();
        $this->menu = Mune::where('user_id',auth()->user()->id)->first();
        $this->total_view = Viwe::where('menu_id',$this->menu->id)->count();
        $this->total_view_real = Counter::where('menu_id',$this->menu->id)->first();
        $this->total_view_real = empty($this->total_view_real) ? 0 : $this->total_view_real->counter;
        $this->total_order = Order::where('menu_id',$this->menu->id)->count();
        $this->total_order_jd = Order::where('menu_id',$this->menu->id)->sum('total');
        $this->order = Order::join('customer','customer.id','orders.customer_id')->where('orders.menu_id',$this->menu->id)->limit(6)->orderBy('orders.id','desc')->get();
        $this->customer = Customer::where('menu_id',$this->menu->id)->limit(6)->orderBy('id','desc')->get();
        return view('livewire.dashboard-menu');
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}
