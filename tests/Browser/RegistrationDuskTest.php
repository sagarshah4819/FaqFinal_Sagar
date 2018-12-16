<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistrationDuskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testUserRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Register')
                ->assertSee('Register')
                ->type('#email', 'sagarshah4819')
                ->type('#password', '123456')
                ->type('#password-confirm', '123456')
                ->click('button[type="submit"]');
        });
    }
}