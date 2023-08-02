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
    public $user;
    public $mode;
    public function __construct($user, $mode = 'short')
    {
        //
        $this->user = $user;
        $this->mode = $mode;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student.profile');
    }
}
