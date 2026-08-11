<?php

namespace App\Jobs;

use App\Models\BillingImport;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProcessBillingImport implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public function __construct(
        public BillingImport $import
    ) {
    }

    public function handle(): void
    {
        $this->import->update([
            'status' => 'processing',
        ]);

        $handle = Storage::disk('local')
            ->readStream($this->import->file_path);

        if (!$handle) {
            throw new \RuntimeException(
                'Unable to open billing import file.'
            );
        }

        $headers = fgetcsv($handle);

        if (!$headers) {
            fclose($handle);

            $this->import->update([
                'status' => 'failed',
            ]);

            throw new \RuntimeException(
                'CSV file is empty.'
            );
        }

        $headers = array_map(
            fn ($header) => trim($header),
            $headers
        );

        while (($row = fgetcsv($handle)) !== false) {

            $this->import->increment('processed_rows');

            try {

                $data = array_combine($headers, $row);

                if (!$data) {
                    throw new \RuntimeException(
                        'Invalid CSV row.'
                    );
                }

                DB::transaction(function () use ($data) {

                    /*
                    |--------------------------------------------------------------------------
                    | Find Resident
                    |--------------------------------------------------------------------------
                    */

                    $userID = $data['user_id'];
                    $user = User::where('id', $userID)
                        ->first();

                    if (!$user) {
                        throw new \RuntimeException(
                            "Resident not found: {$userID}"
                        );
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | Find Existing Plan
                    |--------------------------------------------------------------------------
                    */

                    $plan = SubscriptionPlan::where(
                        'id',
                        $data['plan_id']
                    )
                    ->where(
                        'tenant_id',
                        $this->import->tenant_id
                    )
                    ->first();

                    if (!$plan) {
                        throw new \RuntimeException(
                            "Subscription plan not found: {$data['plan_id']}"
                        );
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | Dates
                    |--------------------------------------------------------------------------
                    */

                    $startsAt = Carbon::parse(
                        $data['starts_at']
                    );

                    $endsAt = Carbon::parse(
                        $data['ends_at']
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | Create Historical Subscription
                    |--------------------------------------------------------------------------
                    */

                    if (Subscription::where([

                          'user_id'=> $user->id,
                          'status' => 'active'
                    ]
                        
                    )
                    ->exists()) {

                        throw new \RuntimeException(
                            "Subscription is active"
                        );
                    }

                    $subscription = Subscription::create([

                        'user_id' =>
                            $user->id,

                        'tenant_id' =>
                            $this->import->tenant_id,

                        'subscription_plan_id' =>
                            $plan->id,

                        'billing_cycle' =>
                            $data['billing_cycle'],

                        'starts_at' =>
                            $startsAt,

                        'ends_at' =>
                            $endsAt,

                        'status' =>
                            $endsAt->isPast()
                                ? 'expired'
                                : 'active',

                        'auto_renew_queued' =>
                            false,

                        'reminder_sent_at' =>
                            false,
                    ]);


                    /*
                    |--------------------------------------------------------------------------
                    | Create Transaction
                    |--------------------------------------------------------------------------
                    */

                    $reference = trim(
                        $data['reference']
                    );

                    if (Transaction::where(
                        'reference',
                        $reference
                    )->exists()) {

                        throw new \RuntimeException(
                            "Transaction already exists: {$reference}"
                        );
                    }

                    Transaction::create([

                        'reference' =>
                            $reference,

                        'user_id' =>
                            $user->id,

                        'tenant_id' =>
                            $this->import->tenant_id,

                        'subscription_id' =>
                            $subscription->id,

                        'amount' =>
                            $data['amount'],

                        'status' =>
                            'success',

                        'gateway' =>
                            !empty($data['gateway'])
                                ? $data['gateway']
                                : 'manual',

                        'remarks' =>
                            'Imported existing subscription billing',
                    ]);

                });

                /*
                |--------------------------------------------------------------------------
                | Successful
                |--------------------------------------------------------------------------
                */

                $this->import->increment(
                    'successful_rows'
                );

            } catch (\Throwable $e) {

                /*
                |--------------------------------------------------------------------------
                | Failed Row
                |--------------------------------------------------------------------------
                */

                $this->import->increment(
                    'failed_rows'
                );

                report($e);
            }
        }

        fclose($handle);


        /*
        |--------------------------------------------------------------------------
        | Finish Import
        |--------------------------------------------------------------------------
        */

        $this->import->update([
            'status' => 'completed',
        ]);
    }
}