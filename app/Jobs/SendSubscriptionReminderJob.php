<?php

namespace App\Jobs;

use App\Models\Subscription;
use App\Mail\SubscriptionExpiryReminder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionReminderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $subscriptionId;

    /**
     * Create a new job instance.
     */
    public function __construct($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $subscription = Subscription::with(['user', 'plan'])
            ->find($this->subscriptionId);

        if (!$subscription) {
            return;
        }

        // Optional safety check (VERY IMPORTANT)
        if ($subscription->status !== 'active') {
            return;
        }

        // Send email via queue
        Mail::to($subscription->user->email)
            ->queue(new SubscriptionExpiryReminder($subscription));
    }
}