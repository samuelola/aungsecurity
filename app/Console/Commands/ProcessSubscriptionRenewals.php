<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Subscription;
use App\Jobs\AutoRenewSubscriptionJob;

class ProcessSubscriptionRenewals extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'subscriptions:auto-renew';

    /**
     * The console command description.
     */
    protected $description = 'Dispatch subscription auto-renewal jobs';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        // Get subscriptions due for renewal (3 days before expiry)
        $subscriptions = Subscription::where('status', 'active')
            ->whereDate('ends_at', now()->addDays(3)->toDateString())
            ->get();

        if ($subscriptions->isEmpty()) {
            $this->info('No subscriptions due for renewal.');
            return Command::SUCCESS;
        }

        foreach ($subscriptions as $subscription) {

            //Prevent duplicate dispatch (optional safety)
            if ($subscription->auto_renew_queued) {
                continue;
            }

            AutoRenewSubscriptionJob::dispatch($subscription->id);

            // mark as queued to avoid duplicates , also this is set to true after job dispatch
            // the job give the final say
            $subscription->update([
                'auto_renew_queued' => true,
                
            ]);
        }

        $this->info(count($subscriptions) . ' renewal jobs dispatched.');

        return Command::SUCCESS;
    }
}