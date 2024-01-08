<?php

namespace Genie\GJS\App\View\Components\GJS;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class BlockAsComponent extends Component
{
    public $data = [];
    public $unique_identifier = '';

    public function __construct()
    {
        $uuid = (string) Str::uuid();
        $this->unique_identifier = str_replace('-', '_', $uuid);
        $this->data['topic'] = "Block As Component";
    }

    public function render()
    {
        return view('gjs::components.gjs.block-as-component')->with([
            'data'=>$this->data
        ]);
    }
}
