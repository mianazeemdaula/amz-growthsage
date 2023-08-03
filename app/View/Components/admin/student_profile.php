<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class student_profile extends Component
{
    /**
     * Create a new component instance.
     */
    public $user;
    public function __construct($user)
    {
        //
        $this->user = $user;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.student_profile');
    }
}
