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

    public function render()
    {
        return view('livewire.add-mune');
    }

    public function save() {
        $id = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'mune'
        ])->id;

        Mune::create([
            'name' => $this->product_name,
            'price' => $this->price,
            'staus' => 'active',
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'user_id' => $id,
            'currint_user' => Auth()->id(),
            'desc' => 'd',
        ]);
    }
}
