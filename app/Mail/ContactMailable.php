<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\Request;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private string $email;
    private string $object;
    private string $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $request)
    {
        $this->name = $request['name'];
        $this->email = $request['email'];
        $this->object = $request['object'];
        $this->content = $request['content'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $contact = [
            'name' => $this->name,
            'email' => $this->email,
            'object' => $this->object,
            'content' => $this->content
        ];

        return $this->subject(ucfirst($this->name) . ' a tenté de vous joindre !')
                    ->markdown('emails.contact')
                    ->with(
                        compact('contact')
                    );
    }
}
