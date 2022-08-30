<?php

namespace App\Http\Livewire;

use App\Models\Counter;
use App\Models\Customer;
use App\Models\Mune;
use App\Models\Viwe;
use Livewire\Component;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DashboardAdmin extends Component
{
    public $user = [];
    public $start_date;
    public $end_date;
    public $view = [];
    public $ranking = [];
    public $menu = [];
    public $order = [];

    public function mount() {
        $this->start_date = new Carbon('first day of this month');
        $this->end_date = new Carbon('last day of this month');
        $this->user = User::where('id',auth()->user()->id)->first();
    }
 
    public function render()
    {
        $this->view = [
            'total_page_main' => Counter::where('admin',1)->whereBetween('created_at',[$this->start_date,$this->end_date])->first()->counter ?? 0,
            'total_page_menu' => Counter::where('admin',0)->whereBetween('created_at',[$this->start_date,$this->end_date])->sum('counter') ?? 0,
            'total_page_menu_real' => Viwe::where('admin',0)->whereBetween('created_at',[$this->start_date,$this->end_date])->count() ?? 0,
            'total_menu_acvtiv' => Mune::where('staus','active')->whereBetween('created_at',[$this->start_date,$this->end_date])->count() ?? 0,
            'total_menu_acvtiv_jd' => Mune::where('staus','active')->whereBetween('created_at',[$this->start_date,$this->end_date])->sum('price') ?? 0,
            'total_menu_not_acvtiv' => Mune::where('staus','not_active')->whereBetween('created_at',[$this->start_date,$this->end_date])->count() ?? 0,
            'total_menu_not_acvtiv_jd' => Mune::where('staus','not_active')->whereBetween('created_at',[$this->start_date,$this->end_date])->sum('price') ?? 0,
            'total_sales_active' => User::where('role','sales')->whereBetween('created_at',[$this->start_date,$this->end_date])->where('staus','active')->count() ?? 0,
            'total_sales_not_active' => User::where('role','sales')->whereBetween('created_at',[$this->start_date,$this->end_date])->where('staus','not_active')->count() ?? 0,
            'total_order' => Order::whereBetween('created_at',[$this->start_date,$this->end_date])->count(),
            'total_order_jd' => Order::whereBetween('created_at',[$this->start_date,$this->end_date])->sum('total'),
            'customer' => Customer::whereBetween('created_at',[$this->start_date,$this->end_date])->count(),
        ];

        $select = ['customer.name as name',DB::raw('sum(orders.total) as total'),DB::raw('count(orders.id) as order_count')];
        $select_s = ['users.name as name',DB::raw('sum(mune.price) as total'),DB::raw('count(mune.id) as order_count')];
        $select_m = ['mune.name as name',DB::raw('sum(orders.total) as total'),DB::raw('count(orders.id) as order_count')];

        $this->ranking = [
            'customer' => Customer::join('orders','orders.customer_id','customer.id')->select($select)->whereBetween('orders.created_at',[$this->start_date,$this->end_date])->groupBy('customer.id')->get(),
            'sales' => User::where('role','sales')->join('mune','mune.currint_user','users.id')->whereBetween('mune.created_at',[$this->start_date,$this->end_date])->select($select_s)->groupBy('users.id')->get(),
            'menu' => Mune::join('orders','orders.menu_id','mune.id')->select($select_m)->whereBetween('orders.created_at',[$this->start_date,$this->end_date])->groupBy('mune.id')->get(),
        ];

        $this->menu = Mune::limit(6)->whereBetween('created_at',[$this->start_date,$this->end_date])->orderBy('id','desc')->get();
        $this->order = Order::limit(6)->whereBetween('created_at',[$this->start_date,$this->end_date])->orderBy('id','desc')->get();

        return view('livewire.dashboard-admin');
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}
