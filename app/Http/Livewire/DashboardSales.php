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


    public function render()
    {
        $this->query();
        return view('livewire.dashboard-sales');
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function query() {
        $this->sales = User::where('id',auth()->user()->id)->first();
        $this->menu = Mune::where('currint_user',$this->sales->id);
        $this->menu_count_active = Mune::where('currint_user',$this->sales->id)->where('staus','active');
        $this->menu_count_not = Mune::where('currint_user',$this->sales->id)->where('staus','not_active');
        $this->menu_sum = Mune::where('currint_user',$this->sales->id)->where('staus','active');

        if (!empty($this->start_date) && !empty($this->end_date)) {
            $this->menu = $this->menu->whereBetween('start_date',[$this->start_date,$this->end_date]);
            $this->menu_count_active = $this->menu_count_active->whereBetween('start_date',[$this->start_date,$this->end_date]);
            $this->menu_count_not = $this->menu_count_not->whereBetween('start_date',[$this->start_date,$this->end_date]);
            $this->menu_sum = $this->menu_sum->whereBetween('start_date',[$this->start_date,$this->end_date]);
        } else {
            $this->menu = $this->menu->whereDate('created_at', Carbon::today());
            $this->menu_count_active = $this->menu_count_active->whereDate('created_at', Carbon::today());
            $this->menu_count_not = $this->menu_count_not->whereDate('created_at', Carbon::today());
            $this->menu_sum = $this->menu_sum->whereDate('created_at', Carbon::today());
        }
        
        $this->menu = $this->menu->limit(6)->orderBy('id','desc')->get();
        $this->menu_count_active = $this->menu_count_active->count();
        $this->menu_count_not = $this->menu_count_not->count();
        $this->menu_sum = $this->menu_sum->sum('price');
    }
}
