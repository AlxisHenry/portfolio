<?php

namespace Tests\Feature;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class SendEmailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_assert_email_can_be_send_to_owner_email()
    {
        Mail::fake();
        Mail::to(env('MAIL_OWNER'))->queue(new ContactMailable([
            'name' => 'Alexis',
            'email' => 'alexis150357@gmail.com',
            'object' => 'Object',
            'content' => 'Contenu Test',
        ]));
        Mail::assertQueued(ContactMailable::class);
    }

}
