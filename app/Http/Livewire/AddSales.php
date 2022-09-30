<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;

class AddSales extends Component
{
    public $email = '';
    public $name = '';
    public $mobile = '';
    public $password = '';
    public $country = 'JO';
    public $state = '';
    public $show_pass = 0;
    public $send = '';
    
    protected $rules = [
        'mobile' => 'required',
        'name' => 'required',
    ];

    public function render()
    {
        return view('livewire.add-sales');
    }

    public function mount($id) {
        $this->show_pass = $id;    
        if ($id > 0) {
            $user = User::find($id);
            $this->name = $user->name;
            $this->email = $user->email;
            $this->mobile = $user->mobile;
            $this->password = $user->password;
            $this->country = $user->country;
            $this->state = $user->state;
            $this->send = $user->role;
        } 
    }

    public function save() {

        if ($this->show_pass == 0) {
            $this->rules['email'] = 'unique:users,email';
            $this->rules['mobile'] = 'unique:users,mobile';
        } else {
            $this->rules['mobile'] = 'required|unique:users,mobile,'.$this->show_pass;
            $this->rules['email'] = 'required|unique:users,email,'.$this->show_pass;
        }

        $this->validate();

        $id = User::updateOrCreate([
            'id' => $this->show_pass
        ],[
            'name' => $this->name,
            'email' => $this->email,
            'role' => 'sales',
            'mobile' => $this->mobile,
            'country' => $this->country,
            'state' => $this->state,
        ])->id;

        if ($this->show_pass == 0 || $this->send == 'sales_send') {
            User::where('id',$id)->update(['password' => Hash::make($this->password)]);
            $this->reset(['name','email','password','mobile']);
        }
        session()->flash('message',  __('text.message'));
    }
}
