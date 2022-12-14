<?php

namespace App\Http\Livewire;

use App\Models\Addition;
use Livewire\Component;
use App\Models\Mune;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AddMune extends Component
{
    use WithFileUploads;

    public $email = '';
    public $name = '';
    public $product_name = '';
    public $mobile = '';
    public $password = '';
    public $start_date = '';
    public $end_date = '';
    public $price = '';
    public $id_m = 0;
    public $user_id = 0;
    public $type = 'order';
    public $theme = 1;
    public $country = 'JO';
    public $state = '';

    public function mount($id) {
        $this->id_m = $id;
        if ($id > 0) {
            $mune = Mune::with('user','additions')->where('id',$id)->first();
            $this->email = $mune->user->email;
            $this->name = $mune->user->name;
            $this->product_name = $mune->name;
            $this->mobile = $mune->user->mobile;;
            $this->price = $mune->price;
            $this->user_id = $mune->user->id;
            $this->theme = $mune->additions->theme;
            $this->type = $mune->additions->type;
            $this->start_date = Carbon::create($mune->start_date)->format('Y-m-d');
            $this->end_date = Carbon::create($mune->end_date)->format('Y-m-d');
            $this->country = $mune->user->country;
            $this->state = $mune->user->state;
        } 
    }

    public function render()
    {
        return view('livewire.add-mune');
    }

    public function save() {
        if ($this->id_m == 0) {
            $this->validate([
                'email' => 'required|unique:users',
                'password' => 'required',
                'mobile' => 'unique:users,mobile',
            ]);
        } else {
            $this->validate([
                'mobile' => 'required|unique:users,mobile,'.$this->user_id,
            ]);
        }

        $this->validate([
            'price' => 'required',
            'start_date' => 'required|before:end_date',
            'end_date' => 'required',
            'product_name' => 'required',
            'name' => 'required',
        ],[],[
            'price' => trans('text.Price'),
            'start_date' => trans('text.StartDate'),
            'end_date' => trans('text.EndDate'),
            'product_name' => trans('text.MenuName'),
            'name' => trans('text.name'),
        ]);

        $id = User::updateOrCreate(['id' => $this->user_id],[
            'name' => $this->name,
            'email' => $this->email,
            'role' => 'mune',
            'mobile' => $this->mobile,
            'country' => $this->country,
            'state' => $this->state,
        ])->id;

        if ($this->id_m == 0) {
            User::where('id',$id)->update(['password' => Hash::make($this->password)]);
        }

        $menu_id = Mune::updateOrCreate(['id' => $this->id_m],[
            'name' => $this->product_name,
            'price' => $this->price,
            'staus' => 'not_active',
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'user_id' => $id,
            'desc' => '',
            'desc_en' => '',
            'qr_code' => 'qr', 
        ])->id;

        if ($this->id_m == 0) {
            Mune::where('id',$menu_id)->update(['currint_user' => Auth()->id()]);
            \QrCode::size(500)
                ->format('png')
                ->generate('menuface.com/'.$this->product_name.'/'.$menu_id, public_path('qrcode/qrcode_'.$menu_id.'.png'));
        
            Mune::where('id',$menu_id)->update([
                'qr_code' => 'qrcode_'.$menu_id.'.png',
            ]); 
        }

        Addition::updateOrCreate(['menu_id' => $menu_id],[
            'theme' => $this->theme,
            'type' => $this->type,
            'menu_id' => $menu_id,
        ]);

        session()->flash('message',  __('text.message'));
        if ($this->id_m ==0 )
            $this->reset(['name','email','product_name','price','mobile','password','start_date','end_date']);
    }
}
