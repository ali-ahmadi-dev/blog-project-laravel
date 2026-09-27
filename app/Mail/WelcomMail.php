<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\fromUrl;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public User $user , public $password)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'بلاگ زین خوش امدید ',
            from: new Address('aliahmadi1999001378@gmail.com',
                'مدیریت وب سایت بلاگ زین'),
          





            // to: 'aimusic.aisnap@gmail.com'
            // replyTo:[

            // ]
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.welcom',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
        Attachment::fromUrl(
            'https://images.ctfassets.net/23aumh6u8s0i/7gu8qd0qzmuxWWjYLhZpqo/2bb8a206fe4a86af9414545b5c25c368/laravel'
        ),
        ];
    }
}