<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Mail\Mailable;
use App\User;
class ValidLoginCredentialsTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testValidLoginDetails()
    {
        $user = factory(\App\User::class)->create([
            'password' => bcrypt($password = '123456'),
        ]);
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);
        $response->assertRedirect('/home');
    }

}
