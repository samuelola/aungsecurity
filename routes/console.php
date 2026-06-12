<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Services\SubscriptionService;

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote');



Schedule::command('subscriptions:process')
    ->everyMinute();

Schedule::command('subscriptions:auto-renew')
    ->everyMinute();    

//Schedule::command('queue:work --stop-when-empty')->everyMinute();

Schedule::command(
    'queue:work --stop-when-empty --memory=256 --max-jobs=1 --timeout=0'
)->everyMinute()->withoutOverlapping();
