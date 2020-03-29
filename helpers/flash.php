<?php

use JoseGus\LaravelFlash\Flash;

/**
 * Return a new instance of flash class
 */
if (! function_exists('flash')) {

    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @return Flash
     */
    function flash($message = null)
    {
        return Flash::instance($message);
    }
}
