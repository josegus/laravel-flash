<?php

namespace JoseGus\LaravelFlash\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use JoseGus\LaravelFlash\LaravelFlashServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * @var
     */
    protected $errorKey;

    /**
     * @var
     */
    protected $successKey;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->errorKey = $this->app['config']['laravel-flash.keys.error'];

        $this->successKey = $this->app['config']['laravel-flash.keys.success'];
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [LaravelFlashServiceProvider::class];
    }
}
