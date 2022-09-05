<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mune;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ListMune extends Component
{
    use WithPagination;

    public $id_mune = '';
    public $name = '';
    public $b_name = '';
    public $mobile = '';
    public $start_date = '';
    public $end_date = '';
    public $status = '';
    public $sales = '';
    public $type = '';
    public $user_sales  = [];

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshListMune' => '$refresh'];


    public function mount() {
        $this->user_sales = User::where('role','sales')->get();
    }

    public function render()
    {
        return view('livewire.list-mune',['list' => $this->query()]); 
    }

    public function query() {
        $user = User::where('id',Auth()->id())->first();
        $list = Mune::with('user','additions');

        if ($user->role != 'admin') {
            $list = $list->where('currint_user',$user->id);
        }

        if (!empty($this->id_mune)) {
            $list = $list->where('id',$this->id_mune);
        }

        if (!empty($this->name)) {
            $list = $list->where('name', 'like', '%' . $this->name . '%');
        }

        if (!empty($this->sales)) {
            if ($this->sales == 'admin') {
                $list = $list->where('currint_user',Auth()->id());
            } else {
                $list = $list->where('currint_user',$this->sales);
            }
        }

        if (!empty($this->b_name)) {
            $list = $list->whereHas('user',function ($q) {
                $q->where('name', 'like', '%' . $this->b_name . '%'); 
            });
        }

        if (!empty($this->type)) {
            $list = $list->whereHas('additions',function ($q) {
                $q->where('type', $this->type);
            });
        }

        if (!empty($this->mobile)) {
            $list = $list->whereHas('user',function ($q) {
                $q->where('mobile', 'like', '%' . $this->mobile . '%');
            });
        }

        if (!empty($this->status)) {
            $list = $list->where('staus',$this->status);
        }

        if (!empty($this->start_date)) {
            $list = $list->whereBetween('start_date',[$this->start_date,$this->end_date]);
        }

        if (!empty($this->end_date)) {
            $list = $list->whereBetween('end_date',[$this->start_date,$this->end_date]);
        }

        $list = $list->paginate(10);
        $this->resetPage();
        return  $list;
    }

    public function delete($id) {
        $status = Mune::where('id',$id)->first()->staus;
        Mune::where('id',$id)->update([
            'staus' => ($status == 'not_active') ? 'active' : 'not_active',
        ]);
    }

    public function currintUser($id) {
        return User::find($id)->name;
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}
