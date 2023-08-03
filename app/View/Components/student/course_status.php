<?php

namespace App\View\Components\student;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class course_status extends Component
{
    /**
     * Create a new component instance.
     */
    public $status;
    public function __construct($status)
    {
        //
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student.course_status');
    }
}
