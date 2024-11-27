<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DoctorCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $doctor;
    public function __construct($doctor)
    {
        $this->doctor = $doctor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.doctor-card');
    }
}
