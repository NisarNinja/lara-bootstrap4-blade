<?php

namespace Easoblue\LaraBootstrap4Blade;

use Illuminate\Support\ServiceProvider;


class LaraBootstrap4BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */

    public function boot()
    {   
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lara-b4');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lara-bootstrap4-blade.php', 'lara-bootstrap4-blade');
    }
}
