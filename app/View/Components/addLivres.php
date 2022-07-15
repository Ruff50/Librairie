<?php

namespace App\View\Components;

use App\Models\Auteurs;
use Illuminate\View\Component;

class addLivres extends Component
{
    public $auteurs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($auteurs)
    {
       $this->auteur=$auteurs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       
        
        return view('components.addLivres');
        

    }
}
