<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VisitorMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $visitor;            // Null if resident invite
    public $invitation;         // Invitation object
    public $tenant;             // Tenant/estate info
    public $isResidentInvite;   // Boolean flag

    /**
     * Create a new message instance.
     *
     * @param  object|null $visitor
     * @param  object $invitation
     * @param  object $tenant
     * @param  bool $isResidentInvite
     */
    public function __construct($visitor = null, $invitation, $tenant, $isResidentInvite = false)
    {
        $this->visitor = $visitor;
        $this->invitation = $invitation;
        $this->tenant = $tenant;
        $this->isResidentInvite = $isResidentInvite;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->isResidentInvite
                ? 'You Have a Resident Invitation'
                : 'Your Visitor Access Code',
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
                'visitor'           => $this->visitor,
                'invitation'        => $this->invitation,
                'tenant'            => $this->tenant,
                'isResidentInvite'  => $this->isResidentInvite,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
