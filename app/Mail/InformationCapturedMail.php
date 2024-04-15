<?php

namespace App\Mail;

use App\Models\Person;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InformationCapturedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public Person $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Information was Captured on ' . config('app.name'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.information_captured',
        );
    }
}
