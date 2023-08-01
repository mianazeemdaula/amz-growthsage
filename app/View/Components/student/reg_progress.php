<?php

namespace App\View\Components\student;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class reg_progress extends Component
{
    /**
     * Create a new component instance.
     */
    public $step;
    public function __construct($step)
    {
        //
        $this->step = $step;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student.reg_progress');
    }
}
