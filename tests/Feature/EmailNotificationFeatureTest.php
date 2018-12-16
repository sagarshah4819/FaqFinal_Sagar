<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Question;
use App\Answer;
use App\User;
class EmailNotificationFeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNotificationMailSent()
    {
        Mail::fake();

        $create_user  = factory(\App\User::class)->make();
        $create_user->save();

        $create_question = factory(\App\Question::class)->make();
        $create_question->user()->associate($create_user);
        $create_question->save();

        $create_answer = factory(\App\Answer::class)->make();
        $create_answer->user()->associate($create_user);
        $create_answer->question()->associate($create_question);
        $this->assertTrue($create_answer->save());


        Mail::to($create_user->email)->send(new Mailable());

        Mail::assertSent(Mailable::class);
    }
}
