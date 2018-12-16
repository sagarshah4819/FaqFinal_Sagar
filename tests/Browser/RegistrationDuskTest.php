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
                ->type('#email', 'sagarshah4819@gmail.com')
                ->type('#password', '123456')
                ->type('#password-confirm', '123456')
                ->press('button[type="submit"]');
        });

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->value('#email', 'sagarshah4819@gmail.com')
                ->value('#password', '123456')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('Laravel');
        });
    }
}
