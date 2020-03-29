<?php

namespace JoseGus\LaravelFlash\Test;

class FlashTest extends TestCase
{
    /** @test */
    public function is_flash_a_key_for_a_simple_message()
    {
        flash('A custom message');

        $this->assertEquals('success', session('flash_notification.type'));
    }

    /** @test */
    public function it_flash_a_simple_message()
    {
        flash('A custom message');

        $expected = [
            'type' => 'success',
            'message' => 'A custom message',
            'dismissible' => config('laravel-flash.dismissible')
        ];

        $actual = session('flash_notification');

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function it_has_a_success_session_key()
    {
        flash()->success('Operation completed successfully!');

        $this->assertEquals('success', session('flash_notification.type'));
    }

    /** @test */
    public function it_has_a_error_session_key()
    {
        flash()->error('You cannot delete this product!');

        $this->assertEquals('danger', session('flash_notification.type'));
    }

    /** @test */
    public function it_has_a_warning_session_key()
    {
        flash()->warning('Watch out! This action is dangerous');

        $this->assertEquals('warning', session('flash_notification.type'));
    }

    /** @test */
    public function it_has_a_stored_session_key()
    {
        flash()->stored('Your product has been stored successfully!');

        $this->assertEquals('success', session('flash_notification.type'));
    }

    /** @test */
    public function it_has_an_updated_session_key()
    {
        flash()->updated('Your product has been updated successfully!');

        $this->assertEquals('success', session('flash_notification.type'));
    }

    /** @test */
    public function it_has_a_deleted_session_key()
    {
        flash()->updated('Your product has been deleted successfully!');

        $this->assertEquals('success', session('flash_notification.type'));
    }

    /** @test */
    public function it_flash_a_message_as_dismissible()
    {
        flash()->error('Exception')->dismissible(true);

        $expected = [
            'type' => 'danger',
            'message' => 'Exception',
            'dismissible' => true,
        ];

        $actual = session('flash_notification');

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function it_flash_a_message_as_not_dismissible()
    {
        flash('Good job')->dismissible(false);

        $expected = [
            'type' => 'success',
            'message' => 'Good job',
            'dismissible' => false,
        ];

        $actual = session('flash_notification');

        $this->assertEquals($expected, $actual);
    }
}
