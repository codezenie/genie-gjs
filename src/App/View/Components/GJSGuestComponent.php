<?php

namespace Genie\GJS\App\View\Components;

use Illuminate\View\Component;

class GJSGuestComponent extends Component
{

    public function __construct( )
    {

    }

    public function render()
    {
        return view('gjs::components.gjs-guest');
    }
}
