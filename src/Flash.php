<?php

namespace JoseGus\LaravelFlash;

class Flash
{
    /**
     * Key for "error" message
     */
    protected $errorKey;

    /**
     * Key for "success" flash message
     */
    protected $successKey;

    /**
     * Class constructor
     */
    private function __construct()
    {
        $this->errorKey = config('laravel-flash.keys.error');
        $this->successKey = config('laravel-flash.keys.success');
    }

    /**
     * Return a new static instance of this class
     *
     * @return Flash
     */
    public static function instance()
    {
        return new static();
    }

    /**
     * Flash a new success message
     *
     * @param null $message
     */
    public function success($message = null)
    {
        $this->putSuccess($message);
    }

    /**
     * Flash a new success message
     *
     * @param null $message
     */
    public function error($message = null)
    {
        $this->putError($message);
    }

    /**
     * Flash a new "stored" message
     *
     * @param null $message
     */
    public function stored($message = null)
    {
        $this->putSuccess($message ?? config('laravel-flash.messages.stored'));
    }

    /**
     * Flash a new "updated" message
     *
     * @param null $message
     */
    public function updated($message = null)
    {
        $this->putSuccess($message ?? config('laravel-flash.messages.updated'));
    }

    /**
     * Flash a new "deleted" message
     *
     * @param null $message
     */
    public function deleted($message = null)
    {
        $this->putSuccess($message ?? config('laravel-flash.messages.deleted'));
    }

    /**
     * Put a new success message with "success" key
     *
     * @param $message
     */
    private function putSuccess($message)
    {
        session()->flash($this->successKey, $message);
    }

    /**
     * Put a new message with "error" key
     *
     * @param $message
     */
    private function putError($message)
    {
        session()->flash($this->errorKey, $message);
    }
}
