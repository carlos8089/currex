<?php

namespace App\View\Components;

use Illuminate\View\Component;

class chatItem extends Component
{
    public $name, $notifs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $notifs)
    {
        $this->name = $name;
        $this->notifs = $notifs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chat-item');
    }
}
