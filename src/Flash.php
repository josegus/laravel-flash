<?php

namespace JoseGus\LaravelFlash;

class Flash
{
    protected $type;

    protected $message;

    protected function __construct($message = null)
    {
        $this->message = $message;

        $this->putFlash('success');
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
        return $this->putFlash('success', $message ?? config('flash.messages.success'));
    }

    /**
     * Flash a new "error" message
     *
     * @param null $message
     * @return $this
     */
    public function error($message = null)
    {
        return $this->putFlash('error', $message ?? config('flash.messages.error'));
    }

    /**
     * Flash a new "warning" message
     *
     * @param null $message
     * @return $this
     */
    public function warning($message = null)
    {
        return $this->putFlash('warning', $message ?? config('flash.messages.warning'));
    }

    /**
     * Flash a new "stored" message
     *
     * @param null $message
     * @return $this
     */
    public function stored($message = null)
    {
        return $this->putFlash('stored', $message ?? config('flash.messages.stored'));
    }

    /**
     * Flash a new "updated" message
     *
     * @param null $message
     * @return $this
     */
    public function updated($message = null)
    {
        return $this->putFlash('updated', $message ?? config('flash.messages.updated'));
    }

    /**
     * Flash a new "deleted" message
     *
     * @param null $message
     * @return $this
     */
    public function deleted($message = null)
    {
        return $this->putFlash('deleted', $message ?? config('flash.messages.deleted'));
    }

    /**
     * Flash a new "queued" message
     *
     * @param null $message
     * @return $this
     */
    public function queued($message = null)
    {
        return $this->putFlash('queued', $message ?? config('flash.messages.queued'));
    }

    /**
     * @param bool $dismissible
     */
    public function dismissible($dismissible = true)
    {
        session(['flash_notification.dismissible' => $dismissible]);
    }

    /**
     * Put a new flash message with "$type" key
     *
     * @param $type
     * @param $message
     * @return $this
     */
    protected function putFlash(string $type, string $message = null)
    {
        $this->type = $type;

        $this->message = $this->message ?? $message;

        session()->flash('flash_notification', [
            'type' => $this->type,
            'class' => $this->getNotificationClass(),
            'message' => $this->message,
            'dismissible' => config('flash.dismissible'),
        ]);

        return $this;
    }

    /**
     * The class applied to the flash notification type
     *
     * @return string
     */
    protected function getNotificationClass(): string
    {
        $framework = config('flash.framework') ?? 'tailwind';

        return config("flash.classes.{$framework}.{$this->type}") ?? 'success';
    }
}
