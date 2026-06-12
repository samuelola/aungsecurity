<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionRenewedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subscription;

    public function __construct($subscription)
    {
        $this->subscription = $subscription;
    }

    public function build()
    {
        return $this->subject('Subscription Renewed Successfully')
            ->view('emails.subscription_renewed');
    }
}