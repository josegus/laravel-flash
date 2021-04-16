<?php

namespace JoseGus\LaravelFlash\Tests;

class FlashSessionMessageTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider notificationTypes
     */
    public function it_flash_a_message_for_each_notification_type($type)
    {
        $message = "This is a message of type {$type}";

        flash()->$type($message);

        $this->assertEquals($message, session('flash_notification.message'));
    }

    /**
     * @test
     *
     * @dataProvider notificationTypes
     */
    public function it_flash_a_key_for_each_notification_type($type)
    {
        $message = "This is a message of type {$type}";

        flash()->$type($message);

        $this->assertEquals($type, session('flash_notification.type'));
    }
}
