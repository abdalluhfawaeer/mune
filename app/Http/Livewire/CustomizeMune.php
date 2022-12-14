<?php

namespace App\Http\Livewire;

use App\Models\Addition;
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
    public $desc_en = "";
    public $email = "";
    public $password = "";
    public $password_c = "";
    public $photo;
    public $img;
    public $color_text = '';
    public $maps = '';
    public $faecbook = ''; public $youtube ='';public $instagram='';public $twitter='';public $snapchat='';public $whatapp='';public $tiktok='';
    public $address = '';
    public $contact_email = '';
    public $phone_number_1 = '';
    public $phone_number_2 = '';
    public $phone_number_3 = '';
    public $timework = '';

    public function mount() {
        $mune = Mune::with('user','additions')->where('user_id',Auth()->user()->id)->first();
        $this->mune_id = $mune->id;
        $this->product_name = $mune->name; 
        $this->color = $mune->color;
        $this->color_text = $mune->text;
        $this->mobile = $mune->user->mobile;
        $this->desc = $mune->desc;
        $this->desc_en = $mune->desc_en;
        $this->email = $mune->user->email;
        $this->password_c = $mune->user->password;
        $this->img = $mune->logo;
        $this->faecbook = $mune->additions->faecbook;
        $this->youtube = $mune->additions->youtube;
        $this->instagram = $mune->additions->instagram;
        $this->twitter = $mune->additions->twitter;
        $this->maps = $mune->additions->maps;
        $this->contact_email = $mune->additions->contact_email;
        $phone_number = $mune->additions->phone_number;
        $this->phone_number_1 = $phone_number['phone_number_1'] ?? '';
        $this->phone_number_2 = $phone_number['phone_number_2'] ?? '';
        $this->phone_number_3 = $phone_number['phone_number_3'] ?? '';
        $this->address = $mune->additions->address;
    }

    public function render()
    {
        return view('livewire.customize-mune');
    }

    public function save() {
        $this->validate([
            'product_name' => 'required',
            'mobile' => 'required|unique:users,mobile,'.Auth()->user()->id,
        ],[],[
            'product_name' => __('text.MenuName'),
        ]);
        
        $logo = !method_exists($this->img, 'temporaryUrl') ? $this->img : $this->img->store('public/'.$this->mune_id);
        $logo = str_replace('public/','',$logo);
        
        Mune::where('id',$this->mune_id)->update([
            'name' => $this->product_name,
            'color' => $this->color,
            'desc' => $this->desc,
            'desc_en' => $this->desc_en,
            'logo' => $logo,
            'text' => $this->color_text,
        ]);

        User::where('id',Auth()->user()->id)->update([
            'email' => $this->email,
            'mobile' => $this->mobile,
        ]);

        Addition::where('menu_id',$this->mune_id)->update([
            'faecbook' => $this->faecbook,
            'youtube' => $this->youtube,
            'instagram' => $this->instagram,
            'twitter' => $this->twitter,
            'maps' => $this->maps,
            'address' => $this->address,
            'contact_email' => $this->contact_email,
            'phone_number' => [
                'phone_number_1' => $this->phone_number_1,
                'phone_number_2' => $this->phone_number_2,
                'phone_number_3' => $this->phone_number_3,
            ],
            'snapchat' => $this->snapchat,
            'whatapp' => $this->whatapp,
            'tiktok' => $this->tiktok,
            'timework' => $this->timework,
        ]);

        session()->flash('message',  __('text.message'));
    }
}
