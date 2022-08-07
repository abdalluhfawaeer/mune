<?php

namespace App\Http\Livewire;

use App\Models\Mune;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Hash;
use Livewire\WithFileUploads;

class CustomizeMune extends Component
{
    use WithFileUploads;

    public $mune_id = 0;
    public $product_name = "";
    public $color = "";
    public $mobile = "";
    public $desc = "";
    public $email = "";
    public $password = "";
    public $password_c = "";
    public $photo;
    public $img = '';

    protected $rules = [
        'product_name' => 'required',
    ];

    public function mount() {
        $mune = Mune::with('user')->where('user_id',Auth()->user()->id)->first();
        $this->mune_id = $mune->id;
        $this->product_name = $mune->name;
        $this->color = $mune->color;
        $this->mobile = $mune->user->mobile;
        $this->desc = $mune->desc;
        $this->email = $mune->user->email;
        $this->password_c = $mune->user->password;
        $this->img = $mune->logo;
    }

    public function render()
    {
        return view('livewire.customize-mune');
    }

    public function save() {
        $this->rules['email'] = 'required|email|unique:users,email,'.Auth()->user()->id;
        $this->rules['mobile'] = 'required|unique:users,mobile,'.Auth()->user()->id;

        $this->validate();
        
        $logo = empty($this->photo) ? $this->img : $this->photo->store('public/'.$this->mune_id);
        $logo = str_replace('public/','',$logo);
        
        Mune::where('id',$this->mune_id)->update([
            'name' => $this->product_name,
            'color' => $this->color,
            'desc' => $this->desc,
            'logo' => $logo
        ]);

        User::where('id',Auth()->user()->id)->update([
            'email' => $this->email,
            'mobile' => $this->mobile,
            //'password' => empty($this->password) ? Hash::make($this->password) : $this->password_c,
        ]);

        session()->flash('message', 'Post successfully updated.');
    }
}
