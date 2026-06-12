<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class VisitorQrCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $visitor;
    public $invitation;
    public $qrPublicUrl;

    /**
     * Create a new message instance.
     */
    public function __construct($visitor, $invitation)
    {
        $this->visitor = $visitor;
        $this->invitation = $invitation;

        // relative path on public disk
        $relativePath = 'qrcodes/' . $invitation->id . '.png';

        // ensure directory exists
        Storage::disk('public')->makeDirectory('qrcodes');

        // generate & store QR code
        Storage::disk('public')->put(
            $relativePath,
            QrCode::format('png')->size(250)->generate($invitation->qr_token)
        );

        // absolute path (for email attachment)
        $absolutePath = Storage::disk('public')->path($relativePath);

        // public URL (optional: for displaying in web/email)
        $this->qrPublicUrl = Storage::disk('public')->url($relativePath);

        // attach QR code to email
        $this->attach($absolutePath, [
            'as'   => 'visitor-qr.png',
            'mime' => 'image/png',
        ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Visitor Access QR Code',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.visitor_qr_code',
            with: [
            'qrPublicUrl' => $this->qrPublicUrl,
            'visitor'     => $this->visitor,
            'invitation'  => $this->invitation,
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
