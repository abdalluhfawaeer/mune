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

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshListMune' => '$refresh'];


    public function mount() {
        
    }

    public function render()
    {
        return view('livewire.list-mune',['list' => $this->query()]); 
    }

    public function query() {
        $user = User::where('id',Auth()->id())->first();
        $list = Mune::with('user');

        if ($user->role != 'admin') {
            $list = $list->where('currint_user',$user->id);
        }

        if (!empty($this->id_mune)) {
            $list = $list->where('id',$this->id_mune);
        }

        if (!empty($this->name)) {
            $list = $list->where('name', 'like', '%' . $this->name . '%');
        }

        if (!empty($this->b_name)) {
            $list = $list->whereHas('user',function ($q) {
                $q->where('name', 'like', '%' . $this->b_name . '%');
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
            $list = $list->where('start_date', 'like', '%' . $this->start_date . '%');
        }

        if (!empty($this->end_date)) {
            $list = $list->where('end_date', 'like', '%' . $this->end_date . '%');
        }

        $list = $list->paginate(10);
        return  $list;
    }

    public function delete($id) {
        $user_id = Mune::where('id',$id)->first()->user_id;
        Mune::where('id',$id)->delete();
        User::where('id',$user_id)->delete();
    }
}
