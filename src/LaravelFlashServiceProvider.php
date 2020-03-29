<?php

namespace JoseGus\LaravelFlash;

use Illuminate\Support\ServiceProvider;

class LaravelFlashServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'flash');

        $this->publishViews();
        $this->publishConfig();
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-flash.php', 'laravel-flash'
        );
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-flash.php' => config_path('laravel-flash.php')
        ], 'laravel-flash:config');
    }

    protected function publishViews()
    {
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/flash')
        ], 'laravel-flash:views');
    }
}
