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
    public function test_send_email()
    {
        $owner_email = "alexis.henry150357@gmail.com";

        $request = [
            'name' => 'Alexis',
            'email' => 'alexis150357@gmail.com',
            'object' => 'Object',
            'content' => 'Contenu Test',
        ];

        Mail::fake();

        Mail::to($owner_email)->queue(new ContactMailable($request));

        Mail::assertQueued(ContactMailable::class);

    }

}
