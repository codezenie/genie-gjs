<?php

use Illuminate\Support\Facades\Route;

Route::get('/{gjscomponent}', function(string $gjstype) {
    return view('gjs::gjs-welcome')->with('gjscomponent', $gjstype);
});

