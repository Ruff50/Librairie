<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\HtmlString;

class livre extends Component
{
    public $titre;
    public $extrait;

    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titre,$extrait)
    {
        $this->titre=$titre;
        $this->extrait=$extrait;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return function (array $data) {
          // $data['componentName'];
         //  $data['attributes'];
          // $data['slot'];
    
     
           return '<div>Components content</div>';
        };
        
    }
}
