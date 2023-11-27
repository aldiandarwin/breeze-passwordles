<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class MagicLoginLink extends Mailable
{
    use Queueable, SerializesModels;

    public string $url;

    public function __construct(string $email)
    {
        $this->url = URL::temporarySignedRoute(
            "login.with-magic-link",
            now()->addMinutes(30),
            ["user" => $email],
        );
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: "Your Magic Login Link");
    }

    public function content(): Content
    {
        return new Content(markdown: "email.magic_login_link");
    }

    public function attachments(): array
    {
        return [];
    }
}
