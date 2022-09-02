<?php

namespace App\Http\Livewire;

use App\Models\Mune;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class SalesReport extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshSalesReport' => '$refresh'];
    public $name = '';
    public $mobile = '';
    public $status = '';
    public $start_date = '';
    public $end_date = '';
    public $currint_user = [];

    public function render()
    {
        return view('livewire.sales-report',['list' => $this->query()]); 
    }

    public function query() {
        $user = User::select([
            'users.id as id',
            'users.name',
            'users.mobile',
            'users.staus',
            DB::raw('count(CASE WHEN  mune.staus = "active" THEN mune.id END) as count_avtive'),
            DB::raw('count(CASE WHEN mune.staus = "not_active" THEN mune.id END) as count_not'),
            DB::raw('sum(CASE WHEN mune.staus = "active" THEN mune.price ELSE 0 END) as total'),
            DB::raw('sum(CASE WHEN mune.staus = "not_active" THEN mune.price ELSE 0 END) as total_not'),
        ]);

        $user = $user->leftJoin('mune','mune.currint_user','users.id'); 


        if (!empty($this->status)) {
            $user = $user->where('users.staus',$this->status);
        }

        if (!empty($this->name)) {
            $user = $user->where('users.name', 'like', '%' . $this->name . '%');
        }

        if (!empty($this->mobile)) {
            $user = $user->where('users.mobile', 'like', '%' . $this->mobile . '%');
        }

        if (!empty($this->start_date)) {
            $user = $user->whereBetween('mune.created_at',[$this->start_date,$this->end_date]);
        }

        $user = $user->where('role','sales')->groupBy('users.id')->paginate(10);
        $this->resetPage();
        return  $user;
    }

    public function delete($id) {
        $status = User::where('id',$id)->first()->staus;
        User::where('id',$id)->update([
            'staus' => ($status == 'not_active') ? 'active' : 'not_active',
        ]);
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function modal($id) {
        $this->currint_user = Mune::with('user','additions')->where('currint_user',$id)->get();
    }
}
 