<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SignUp extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    public $attachments = [];

    /**
     * Create a new message instance.
     */
    public function __construct($name)
    {
        $this->name = $name;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sign Up',
        );
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('sender@example.com')
            ->markdown('SignupView'); //->attachFiles($this->attachments);
    }

    public function attach($path, array $options = [])
    {
        $this->attachments[] = new Attachment($path, $options);

        return $this;
    }
}
