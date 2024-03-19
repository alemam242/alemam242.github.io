<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $name, $userEmail, $subject, $body;
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->userEmail = $data['email'];
        $this->subject = $data['subject'];
        $this->body = $data['body'];
    }

    // public function __construct($name, $email, $subject, $body)
    // {
    //     $this->name = $name;
    //     $this->userEmail = $email;
    //     $this->subject = $subject;
    //     $this->body = $body;
    // }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.message',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
