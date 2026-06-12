<?php

namespace App\Jobs;

use App\Models\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionRenewedMail;

class AutoRenewSubscriptionJob implements ShouldQueue
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
        $subscription = Subscription::with(['user', 'plan', 'tenant'])
            ->find($this->subscriptionId);

        if (!$subscription) {
            return;
        }

        // Skip if not active
        if ($subscription->status !== 'active') {
            return;
        }

        // Skip if no authorization code (VERY IMPORTANT)
        if (!$subscription->authorization_code) {
            Log::warning("Auto-renew skipped: no authorization code", [
                'subscription_id' => $subscription->id
            ]);
            return;
        }

        try {
            // Call service layer (BEST PRACTICE)
            app(\App\Services\SubscriptionService::class)
                ->chargeAuthorization($subscription);
            // Refresh model to get updated dates
            $subscription->refresh();

            // RESET LOCK HERE
            $subscription->update([
                'auto_renew_queued' => false,
                'reminder_sent_at'  => false
            ]);

            // SEND QUEUED EMAIL
            Mail::to($subscription->user->email)
            ->queue(new SubscriptionRenewedMail($subscription));    

        } catch (\Exception $e) {

            Log::error("Auto-renew failed", [
                'subscription_id' => $subscription->id,
                'error' => $e->getMessage()
            ]);

            // Optional: mark subscription as past due
            $subscription->update([
                'status' => 'past_due'
            ]);
        }
    }
}