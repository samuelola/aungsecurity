<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VisitorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $visitor;
    public $invitation;
    public $tenant;

    /**
     * Create a new message instance.
     */
    public function __construct($visitor, $invitation,$tenant)
    {
        $this->visitor = $visitor;
        $this->invitation = $invitation;
        $this->tenant = $tenant;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Visitor Access Code',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.visitor_code',
            with: [
            'visitor'     => $this->visitor,
            'invitation'  => $this->invitation,
            'tenant'      => $this->tenant,
           ],
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
