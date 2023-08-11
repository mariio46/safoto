<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navbar = [
            'Home' => '/',
            'Albums' => '/#albums',
            'Service' => '/#service',
            'Contact' => '/#contact',
        ];

        return view('components.home.navbar', [
            'navMenu' => $navbar,
        ]);
    }
}
