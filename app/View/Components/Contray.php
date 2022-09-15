<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Contray extends Component
{
    public $country = '';

    public function __construct($country)
    {
        $this->country = $country;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contray');
    }
}
