<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact as ModelsContact;
use Livewire\Component;
use Livewire\WithPagination;

class Contact extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name = '';
    public $mobile = '';
    public $start_date = '';
    public $end_date = '';


    public function render()
    {
        return view('livewire.contact.contact',[
            'list' => $this->query()
        ]);
    }

    public function query() {
        $contact = ModelsContact::where('status','contact');

        if (!empty($this->name)) {
            $contact = $contact->where('name', 'like', '%' . $this->name . '%');
        }

        if (!empty($this->mobile)) {
            $contact = $contact->where('mobile', 'like', '%' . $this->mobile . '%');
        }

        if (!empty($this->start_date)) {
            $contact = $contact->whereBetween('created_at',[$this->start_date,$this->end_date]);
        }

        $contact = $contact->orderBy('id','desc')->paginate(10);
        $this->resetPage();
        return  $contact;
    }

    public function setDate($start_date ,$end_date) {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}
