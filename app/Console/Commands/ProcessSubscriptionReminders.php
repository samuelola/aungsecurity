<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Subscription;
use App\Jobs\SendSubscriptionReminderJob;


class ProcessSubscriptionReminders extends Command
{
    protected $signature = 'subscriptions:process';

    protected $description = 'Dispatch subscription reminder job';

    public function handle()
    {
        // 5 days reminder
        $reminders = Subscription::where('status', 'active')
            ->whereDate('ends_at', now()->addDays(5)->toDateString())
            ->get();

        if ($reminders->isEmpty()) {
            $this->info('No subscriptions reminders.');
            return Command::SUCCESS;
        }    

        foreach ($reminders as $subscription) {

            if ($subscription->reminder_sent_at) {
                continue;
            }

            SendSubscriptionReminderJob::dispatch($subscription->id);
            $subscription->update([
                'reminder_sent_at' => true
            ]);
            
        }

        $this->info('Subscription jobs dispatched successfully.');
        return Command::SUCCESS;
    }
}



