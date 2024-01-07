<?php

use Illuminate\Support\Facades\Route;

Route::get('/gjs-canvas', function () {
    return view('gjs::gjs-welcome');
});

