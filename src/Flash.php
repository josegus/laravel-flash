<?php

namespace JoseGus\LaravelFlash;

class Flash
{
    protected $type;

    protected $message;

    protected function __construct($message = null)
    {
        $this->type = 'success';

        $this->message = $message;

        $this->putFlash($this->type, $this->message);
    }

    /**
     * Return a new static instance of this class
     *
     * @param null $message
     * @return static
     */
    public static function instance($message = null)
    {
        return new static($message);
    }

    /**
     * Flash a new "success" message
     *
     * @param null $message
     * @return $this
     */
    public function success($message = null)
    {
        return $this->putFlash('success', $message ?? config('laravel-flash.messages.success'));
    }

    /**
     * Flash a new "error" message
     *
     * @param null $message
     * @return $this
     */
    public function error($message = null)
    {
        return $this->putFlash('danger', $message ?? config('laravel-flash.messages.error'));
    }

    /**
     * Flash a new "warning" message
     *
     * @param null $message
     * @return $this
     */
    public function warning($message = null)
    {
        return $this->putFlash('warning', $message ?? config('laravel-flash.messages.stored'));
    }

    /**
     * Flash a new "stored" message
     *
     * @param null $message
     * @return $this
     */
    public function stored($message = null)
    {
        return $this->putFlash('success', $message ?? config('laravel-flash.messages.stored'));
    }

    /**
     * Flash a new "updated" message
     *
     * @param null $message
     * @return $this
     */
    public function updated($message = null)
    {
        return $this->putFlash('success', $message ?? config('laravel-flash.messages.updated'));
    }

    /**
     * Flash a new "deleted" message
     *
     * @param null $message
     * @return $this
     */
    public function deleted($message = null)
    {
        return $this->putFlash('success', $message ?? config('laravel-flash.messages.deleted'));
    }

    /**
     * @param bool $dismissible
     */
    public function dismissible($dismissible = true)
    {
        session()->flash('flash_notification', [
            'type' => $this->type,
            'message' => $this->message,
            'dismissible' => $dismissible,
        ]);
    }

    /**
     * Put a new flash message with "$type" key
     *
     * @param $type
     * @param $message
     * @return $this
     */
    protected function putFlash($type, $message)
    {
        $this->type = $type;

        $this->message = $this->message ?? $message;

        session()->flash('flash_notification', [
            'type' => $this->type,
            'message' => $this->message,
            'dismissible' => config('laravel-flash.dismissible')
        ]);

        return $this;
    }
}
