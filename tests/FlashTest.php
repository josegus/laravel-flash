<?php

namespace JoseGus\LaravelFlash\Test;

class FlashTest extends TestCase
{
    /** @test */
    public function it_has_a_stored_session_key()
    {
        flash()->stored('Your product has been stored successfully!');

        $hasSessionKey = session()->has($this->successKey);

        $this->assertTrue($hasSessionKey);
    }

    /** @test */
    public function it_has_an_updated_session_key()
    {
        flash()->updated('Your product has been updated successfully!');

        $hasSessionKey = session()->has($this->successKey);

        $this->assertTrue($hasSessionKey);
    }

    /** @test */
    public function it_has_a_deleted_session_key()
    {
        flash()->updated('Your product has been deleted successfully!');

        $hasSessionKey = session()->has($this->successKey);

        $this->assertTrue($hasSessionKey);
    }

    /** @test */
    public function it_has_a_custom_success_session_key()
    {
        flash()->success('Operation completed successfully!');

        $hasSessionKey = session()->has($this->successKey);

        $this->assertTrue($hasSessionKey);
    }

    /** @test */
    public function it_has_a_custom_error_session_key()
    {
        flash()->error('You cannot delete this product!');

        $hasSessionKey = session()->has($this->errorKey);

        $this->assertTrue($hasSessionKey);
    }
}
