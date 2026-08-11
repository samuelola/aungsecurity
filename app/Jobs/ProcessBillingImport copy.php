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

        $headers = fgetcsv($handle);

        $headers = array_map(
            fn ($header) => trim($header),
            $headers
        );

        while (($row = fgetcsv($handle)) !== false) {

            try {

                $data = array_combine($headers, $row);

                DB::transaction(function () use ($data) {

                    $user = User::where(
                        'email',
                        trim($data['email'])
                    )->firstOrFail();


                    $plan = SubscriptionPlan::where(
                        'id',
                        $data['plan_id']
                    )
                    ->where(
                        'tenant_id',
                        $this->import->tenant_id
                    )
                    ->firstOrFail();


                    /*
                    |--------------------------------------------------------------------------
                    | Subscription
                    |--------------------------------------------------------------------------
                    */

                    $subscription = Subscription::create([
                        'user_id' => $user->id,

                        'tenant_id' => $this->import->tenant_id,

                        'subscription_plan_id' => $plan->id,

                        'billing_cycle' => $data['billing_cycle'],

                        'starts_at' => Carbon::parse($data['starts_at']),

                        'ends_at' => Carbon::parse($data['ends_at']),

                        'status' => Carbon::parse($data['ends_at'])->isPast()
                            ? 'expired'
                            : 'active',

                        'auto_renew_queued' => false,

                        'reminder_sent_at' => false,
                    ]);


                    /*
                    |--------------------------------------------------------------------------
                    | Transaction
                    |--------------------------------------------------------------------------
                    */

                    Transaction::updateOrCreate(

                        [
                            'reference' =>
                                trim(
                                    $data['reference']
                                ),
                        ],

                        [
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

                            'payment_method' =>
                                $data['payment_method'] ?: 'manual',

                            'description' =>
                                'Imported existing subscription billing',
                        ]
                    );

                });


                $this->import->increment(
                    'successful_rows'
                );

            } catch (\Throwable $e) {

                $this->import->increment(
                    'failed_rows'
                );

                report($e);
            }


            $this->import->increment(
                'processed_rows'
            );
        }

        fclose($handle);


        $this->import->update([
            'status' => 'completed',
        ]);
    }
}