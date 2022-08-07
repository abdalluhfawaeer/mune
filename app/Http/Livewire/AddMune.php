<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mune;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class AddMune extends Component
{
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

    protected $rules = [
        'mobile' => 'required',
        'price' => 'required',
        'start_date' => 'required|before:end_date',
        'end_date' => 'required',
        'product_name' => 'required',
        'name' => 'required',
    ];

    public function mount($id) {
        $this->id_m = $id;
        if ($id > 0) {
            $mune = Mune::with('user')->where('id',$id)->first();
            $this->email = $mune->user->email;
            $this->name = $mune->user->name;
            $this->product_name = $mune->name;
            $this->mobile = $mune->user->mobile;;
            $this->password = '';
            $this->start_date = $mune->start_date;
            $this->end_date = $mune->end_date;
            $this->price = $mune->price;
            $this->user_id = $mune->user->id;
        } 
    }
    public function render()
    {
        return view('livewire.add-mune');
    }

    public function save() {
        if ($this->id_m == 0) {
            $this->rules['email'] = 'required|unique:users';
            $this->rules['password'] = 'required';
            $this->rules['password'] = 'required|unique:users';
        }
    
        $this->validate();

        $id = User::updateOrCreate(['id' => $this->user_id],[
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'mune',
            'mobile' => $this->mobile,
        ])->id;

        Mune::updateOrCreate(['id' => $this->id_m],[
            'name' => $this->product_name,
            'price' => $this->price,
            'staus' => 'active',
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'user_id' => $id,
            'currint_user' => Auth()->id(),
            'desc' => 'd',
        ]);

        session()->flash('message', 'Post successfully updated.');
        if ($this->id_m ==0 )
            $this->reset(['name','email','product_name','price','mobile','password','start_date','end_date']);
    }
}
