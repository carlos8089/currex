<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardChangerCertified extends Component
{
    public $name, $city, $country, $amount, $stars;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $city, $country, $amount, $stars)
    {
        $this->name = $name;
        $this->city = $city;
        $this->country = $country;
        $this->amount = $amount;
        $this->stars = $stars;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-changer-certified');
    }
}
