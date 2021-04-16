<?php

namespace JoseGus\LaravelFlash\Tests;

class FlashViewClassTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider notificationTypes
     */
    public function view_has_message_for_each_tailwind_notification_type($type)
    {
        flash()->$type();

        $this->assertStringContainsString(config("flash.classes.tailwind.{$type}"), view('flash::message')->render());
    }

    /**
     * @test
     *
     * @dataProvider notificationTypes
     */
    public function view_has_message_for_each_bootstrap_notification_type($type)
    {
        config(['flash.framework' => 'bootstrap']);

        flash()->$type();

        $this->assertStringContainsString(config("flash.classes.bootstrap.{$type}"), view('flash::message')->render());
    }
}
