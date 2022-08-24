<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Mune;
use Illuminate\Support\Facades\DB;

class CustomerList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshCustomerList' => '$refresh'];

    public $menu_id = 0;
    public $name = '';
    public $mobile = '';

    public function mount($id) {
        if ($id == 0) {
            $this->menu_id = Mune::where('user_id',auth()->user()->id)->first()->id;
        } else {
            $this->menu_id = $id;
        }
    }

    public function render()
    {
        return view('livewire.customer-list',[
            'list' => $this->query()
        ]);
    }

    public function query()
    {
        $list = Customer::select('customer.*',DB::raw('count(orders.id) as total_order'),DB::raw('sum(orders.total) as total_price'),DB::raw('max(orders.created_at) as last_date'));

        $list = $list->join('orders','customer.id','orders.customer_id')->where('orders.menu_id',$this->menu_id);
        
        if (!empty($this->name)) {
            $list = $list->where('name', 'like', '%' . $this->name . '%');
        }

        if (!empty($this->mobile)) {
            $list = $list->where('mobile', 'like', '%' . $this->mobile . '%');
        }

        $list = $list->orderBy('total_order','desc')->groupBy('customer.id')->paginate(10);
        $this->resetPage();
        return  $list;
    }
}
