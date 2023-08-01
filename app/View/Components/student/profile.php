<?php

namespace App\View\Components\student;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class profile extends Component
{
    /**
     * Create a new component instance.
     */
    public $student;
    public function __construct($user)
    {
        //
        $this->student = $user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student.profile');
    }
}
