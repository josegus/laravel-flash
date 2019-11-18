<?php

use JoseGus\LaravelFlash\Flash;

/**
 * Return a new instance of flash class
 */
if (! function_exists('flash')) {
    function flash()
    {
        return Flash::instance();
    }
}
