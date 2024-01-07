<?php

namespace Genie\GJS\App\View\Components\GJS;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class HelloWorldComponent extends Component
{
    public $data = [];
    public $unique_identifier = '';

    public function __construct()
    {
        $uuid = (string) Str::uuid();
        $this->unique_identifier = str_replace('-', '_', $uuid);
    }

    public function render()
    {
        $this->data = "salam";
        return view('gjs::components.gjs.helloworld')->with([
            'data'=>$this->data
        ]);
    }
}
