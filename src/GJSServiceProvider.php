<?php

namespace Genie\GJS;

use Illuminate\Support\ServiceProvider;

class GJSServiceProvider extends ServiceProvider
{
    public function boot()
    {
    $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    $this->loadViewsFrom(__DIR__ . '/resources/views', 'gjs');

    $this->commands([
        ##InstallationCommandClass##
    ]);

\Illuminate\Support\Facades\Blade::component('gjs-master',  \Genie\GJS\App\View\Components\GJSMasterComponent::class);
\Illuminate\Support\Facades\Blade::component('gjs-guest',  \Genie\GJS\App\View\Components\GJSGuestComponent::class);
\Illuminate\Support\Facades\Blade::component('gjs-hello-world',  \Genie\GJS\App\View\Components\GJS\HelloWorldComponent::class);
\Illuminate\Support\Facades\Blade::component('gjs-canvas',  \Genie\GJS\App\View\Components\GJS\CanvasComponent::class);
\Illuminate\Support\Facades\Blade::component('gjs-block',  \Genie\GJS\App\View\Components\GJS\BlockComponent::class);
##||ANOTHERCOMPONENT||##


    }
    public function register()
    { }
}
