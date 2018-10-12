<?php

namespace JaPronto\Geographic;


use Illuminate\Support\ServiceProvider;

class GeographicServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            echo "Hello Base Module\n";
        }
    }

    public function register()
    {

    }
}