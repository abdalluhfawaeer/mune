<?php

namespace App\Http\Livewire;

use App\Models\Mune;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class DashboardSales extends Component
{
    public $sales = [];
    public $menu = [];
    public $user = [];
    public $menu_count_active = 0;
    public $menu_count_not = 0;
    public $menu_sum = 0;
    public $total_order = 0;
    public $start_date;
    public $end_date;

    public function mount() {
        $this->start_date = new Carbon('first day of this month');
        $this->end_date = new Carbon('last day of this month');
    }

    public function render()
    {
        $this->sales = User::where('id',auth()->user()->id)->first();
        $this->menu = Mune::where('currint_user',$this->sales->id)->whereBetween('start_date',[$this->start_date,$this->end_date])->limit(6)->orderBy('id','desc')->get();
        $this->menu_count_active = Mune::where('currint_user',$this->sales->id)->where('staus','active')->whereBetween('start_date',[$this->start_date,$this->end_date])->count();
        $this->menu_count_not = Mune::where('currint_user',$this->sales->id)->where('staus','not_active')->whereBetween('start_date',[$this->start_date,$this->end_date])->count();
        $this->menu_sum = Mune::where('currint_user',$this->sales->id)->where('staus','active')->whereBetween('start_date',[$this->start_date,$this->end_date])->sum('price');
        return view('livewire.dashboard-sales');
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}
