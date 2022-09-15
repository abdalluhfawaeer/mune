<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $old_password = '';
    public $new_password = '';
    public $new_password_confirmation = '';

    // protected $rules = [
    //     'old_password' => ['required', new MatchOldPassword],
    //     'new_password' => ['required|confirmed'],
    // ];

    public function render()
    {
        return view('livewire.change-password');
    }

    public function save() {
         # Validation
         $this->validate([
            'old_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|confirmed',
         ]);

        // #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($this->new_password)
        ]);

        session()->flash('message',  __('text.message'));
    }
}
