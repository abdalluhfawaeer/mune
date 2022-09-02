<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class CustomerReport extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshSalesReport' => '$refresh'];
    public $name = '';
    public $mobile = '';
    public $status = '';
    public $start_date = '';
    public $end_date = '';

    public function render()
    {
        return view('livewire.customer-report',[
            'list' => $this->query()
        ]);
    }

    public function query() {
        $select = ['mune.name as mune_name','customer.name as name','customer.mobile as mobile',DB::raw('sum(orders.total) as total'),DB::raw('count(orders.id) as order_count')];
        $customer = Customer::select($select);
        $customer = $customer->join('orders','orders.customer_id','customer.id');
        $customer = $customer->join('mune','mune.id','customer.menu_id');

        if (!empty($this->name)) {
            $customer = $customer->where('customer.name', 'like', '%' . $this->name . '%');
        }

        if (!empty($this->mobile)) {
            $customer = $customer->where('customer.mobile', 'like', '%' . $this->mobile . '%');
        }

        if (!empty($this->start_date)) {
            $customer = $customer->whereBetween('orders.created_at',[$this->start_date,$this->end_date]);
        }

        $customer = $customer->groupBy('customer.id')->paginate(10);
        $this->resetPage();
        return  $customer;
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}
