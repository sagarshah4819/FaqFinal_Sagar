<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Mail\Mailable;
use App\User;
class InvalidLoginCredentialsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInvalidLoginDetails()
    {
        $user = factory(\App\User::class)->create([
            'password' => bcrypt('123456'),
        ]);
        $response = $this->from('/login')->post('/login',
            [
                'email' => $user->email,
                'password' => 'random',
            ]);
        $response->assertRedirect('/login');
    }
}
