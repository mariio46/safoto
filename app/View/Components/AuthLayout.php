<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'Studio';
        // $this->title = $title ?? config('app.name', 'Safoto');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('dashboard.layout.main.mainDashboard');
    }
}
