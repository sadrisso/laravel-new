<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    public $type;
    public $name;
    public $label;
    
   
    public function __construct($type, $name, $label)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
