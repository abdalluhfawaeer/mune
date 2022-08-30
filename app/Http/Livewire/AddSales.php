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
    public $show_pass = 0;
    
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
            $user = User::where('id',$id)->first();
            $this->name = $user->name;
            $this->email = $user->email;
            $this->mobile = $user->mobile;
            $this->password = $user->password;
        } 
    }

    public function save() {
        $this->validate();
        if ($this->show_pass == 0) {
            $this->rules['email'] = 'unique:users,email';
        }

        $id = User::updateOrCreate([
            'id' => $this->show_pass
        ],[
            'name' => $this->name,
            'email' => $this->email,
            'role' => 'sales',
            'mobile' => $this->mobile,
        ])->id;

        if ($this->show_pass == 0) {
            User::where('id',$id)->update(['password' => Hash::make($this->password)]);
            $this->reset(['name','email','password','mobile']);
        }
        session()->flash('message',  __('text.message'));
    }
}
