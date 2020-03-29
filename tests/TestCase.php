<?php

namespace JoseGus\LaravelFlash\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use JoseGus\LaravelFlash\LaravelFlashServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
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
