<?php
namespace Tests\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

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
                ->type('email', 'ss3958@njit.edu')
                ->type('password', '123456')
                ->type('password_confirmation', '123456')
                ->click('button[type="submit"]')
                ->click('#navbarDropdown')
                ->clickLink('Logout')
                ->assertSee('Laravel');
        });
       $this->browse(function (Browser $browser) {
        $browser->visit('/login')
                ->type('email', 'ss3958@njit.edu')
                ->type('password', '123456')
                ->press('Login')
                ->assertPathIs('/home');
        });
        $testuser = User::where('email','ss3958@njit.edu')->first();
       // dd($testuser);
$testuser->delete();
    }
}