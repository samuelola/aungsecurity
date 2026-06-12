<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class SubscriptionExpiryReminder extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subscription;
    public $user;
    public $plan;
    public $daysLeft;

    public function __construct($subscription)
    {
        $this->subscription = $subscription;
        $this->user = $subscription->user->first_name;
        $this->plan = $subscription->plan;

        $this->daysLeft = ceil(now()->diffInDays($subscription->ends_at, false));
    }

    public function build()
    {
        return $this->subject('Your Subscription is Expiring Soon')
            ->view('emails.subscription_reminder');
    }
}