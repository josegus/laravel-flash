<?php

namespace JoseGus\LaravelFlash\Tests;

class FlashDismissibleTest extends TestCase
{
    /** @test */
    public function it_flash_a_message_as_dismissible()
    {
        flash()->error('Exception')->dismissible(true);

        $this->assertTrue(session('flash_notification.dismissible'));
    }

    /** @test */
    public function it_flash_a_message_as_not_dismissible()
    {
        flash('Good job')->dismissible(false);

        $this->assertFalse(session('flash_notification.dismissible'));
    }
}
