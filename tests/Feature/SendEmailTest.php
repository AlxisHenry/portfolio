<?php

namespace Tests\Feature;

use App\Mail\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class SendEmailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_send_email()
    {
        $email = "alexishenry.dev@gmail.com";
        Mail::to($email)->send(new Contact());
    }
}
