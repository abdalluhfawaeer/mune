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
        $this->user = User::where('id',auth()->user()->id)->first();
    }
 
    public function render()
    {
        $this->query();
        return view('livewire.dashboard-admin');
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function query() {
        $this->view = [
            'total_page_main' => Counter::where('admin',1),
            'total_page_menu' => Counter::where('admin',0),
            'total_page_menu_real' => Viwe::where('admin',0),
            'total_menu_acvtiv' => Mune::where('staus','active'),
            'total_menu_acvtiv_jd' => Mune::where('staus','active'),
            'total_menu_not_acvtiv' => Mune::where('staus','not_active'),
            'total_menu_not_acvtiv_jd' => Mune::where('staus','not_active'),
            'total_sales_active' => User::where('role','sales')->where('staus','active'),
            'total_sales_not_active' => User::where('role','sales')->where('staus','not_active'),
            'total_order' => Order::count(),
            'total_order_jd' => Order::sum('total'),
            'customer' => Customer::count(),
        ];

        $select = ['customer.name as name',DB::raw('sum(orders.total) as total'),DB::raw('count(orders.id) as order_count')];
        $select_s = ['users.name as name',DB::raw('sum(mune.price) as total'),DB::raw('count(mune.id) as order_count')];
        $select_m = ['mune.name as name',DB::raw('sum(orders.total) as total'),DB::raw('count(orders.id) as order_count')];

        $this->ranking = [
            'customer' => Customer::join('orders','orders.customer_id','customer.id')->select($select),
            'sales' => User::where('role','sales')->join('mune','mune.currint_user','users.id')->select($select_s),
            'menu' => Mune::join('orders','orders.menu_id','mune.id')->select($select_m),
        ];

        $this->menu = Mune::limit(6);
        $this->order = Order::limit(6);

        if (!empty($this->start_date) && !empty($this->end_date)) {
            $this->view['total_page_main'] = $this->view['total_page_main']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->view['total_page_menu'] = $this->view['total_page_menu']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->view['total_page_menu_real'] = $this->view['total_page_menu_real']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->view['total_menu_acvtiv'] = $this->view['total_menu_acvtiv']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->view['total_menu_acvtiv_jd'] = $this->view['total_menu_acvtiv_jd']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->view['total_sales_active'] = $this->view['total_sales_active']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->view['total_sales_not_active'] = $this->view['total_sales_not_active']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->view['total_order'] = Order::whereBetween('created_at',[$this->start_date,$this->end_date])->count();
            $this->view['total_order_jd'] = Order::whereBetween('created_at',[$this->start_date,$this->end_date])->sum('total');
            $this->view['customer'] = Customer::whereBetween('created_at',[$this->start_date,$this->end_date])->count();
            $this->view['total_menu_not_acvtiv'] = $this->view['total_menu_not_acvtiv']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->view['total_menu_not_acvtiv_jd'] = $this->view['total_menu_not_acvtiv_jd']->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->ranking['customer'] = $this->ranking['customer']->whereBetween('orders.created_at',[$this->start_date,$this->end_date]);
            $this->ranking['sales'] = $this->ranking['sales']->whereBetween('mune.created_at',[$this->start_date,$this->end_date]);
            $this->ranking['menu'] = $this->ranking['menu']->whereBetween('mune.created_at',[$this->start_date,$this->end_date]);
            $this->menu =  $this->menu->whereBetween('created_at',[$this->start_date,$this->end_date]);
            $this->order =  $this->menu->whereBetween('created_at',[$this->start_date,$this->end_date]);
        }

        $this->view['total_page_main'] = $this->view['total_page_main']->first()->counter ?? 0;
        $this->view['total_page_menu'] = $this->view['total_page_menu']->sum('counter') ?? 0;
        $this->view['total_page_menu_real'] = $this->view['total_page_menu_real']->count() ?? 0;
        $this->view['total_menu_acvtiv'] = $this->view['total_menu_acvtiv']->count() ?? 0;
        $this->view['total_menu_acvtiv_jd'] = $this->view['total_menu_acvtiv_jd']->sum('price') ?? 0;
        $this->view['total_menu_not_acvtiv'] = $this->view['total_menu_not_acvtiv']->count() ?? 0;
        $this->view['total_menu_not_acvtiv_jd'] = $this->view['total_menu_not_acvtiv_jd']->sum('price') ?? 0;
        $this->view['total_sales_active'] = $this->view['total_sales_active']->count() ?? 0;
        $this->view['total_sales_not_active'] = $this->view['total_sales_not_active']->count() ?? 0;
        $this->ranking['customer'] = $this->ranking['customer']->groupBy('customer.id')->get();
        $this->ranking['sales'] = $this->ranking['sales']->groupBy('users.id')->get();
        $this->ranking['menu'] = $this->ranking['menu']->groupBy('mune.id')->get();
        $this->menu = $this->menu->orderBy('id','desc')->get();
        $this->order = $this->order->orderBy('id','desc')->get();
    }
}
