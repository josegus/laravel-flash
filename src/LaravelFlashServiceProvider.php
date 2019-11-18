<?php

namespace JoseGus\LaravelFlash;

use Illuminate\Support\ServiceProvider;

class LaravelFlashServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../laravel-flash.php', config_path('laravel-flash.php')
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-flash.php', 'laravel-flash'
        );
    }
}
