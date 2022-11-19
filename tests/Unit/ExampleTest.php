<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
        //1. visit the home page
        // $this->visit('/')
        //2. press a "Click me " link
        // ->click('Click Me')
        //3. see "you've been clicked, punk."
        // ->see("You've been clicked, punk.")
        //4. Assert that the current url is /feedback
        // ->seePageIs('/feedback');

    }
}
