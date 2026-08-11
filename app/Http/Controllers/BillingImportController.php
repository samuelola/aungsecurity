<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Jobs\ProcessBillingImport;
use App\Models\BillingImport;
use Illuminate\Support\Facades\Storage;

class BillingImportController extends Controller
{
    public function preview(Request $request, $tenant)
    {
        $tenant = Tenant::findOrFail($tenant);

        abort_unless($tenant->import_existing_subscription_billing, 403);

        $request->validate([
            'billing_file' => [
                'required',
                'file',
                'mimes:csv,txt',
                'max:10240',
            ],
        ]);

        $file = $request->file('billing_file');

        $handle = fopen($file->getRealPath(), 'r');

        $headers = fgetcsv($handle);

        $headers = array_map(
            fn ($header) => trim($header),
            $headers
        );

        $requiredHeaders = [
            'user_id',
            'email',
            'plan_id',
            'billing_cycle',
            'starts_at',
            'ends_at',
            'amount',
            'reference',
            'gateway',
        ];

        foreach ($requiredHeaders as $required) {

            if (!in_array($required, $headers)) {

                return back()->with(
                    'error',
                    "Missing column: {$required}"
                );

            }
        }

        $validRows = [];
        $invalidRows = [];

        $rowNumber = 1;

        while (($row = fgetcsv($handle)) !== false) {

            $rowNumber++;

            if (count($row) !== count($headers)) {

                $invalidRows[] = [
                    'row' => $rowNumber,
                    'error' => 'Invalid number of columns.',
                ];

                continue;
            }

            $data = array_combine($headers, $row);

            $errors = [];

            /*
            |--------------------------------------------------------------------------
            | Find Resident
            |--------------------------------------------------------------------------
            */

            $user = User::where('id', trim($data['user_id']))
                ->first();

            if (!$user) {

                $errors[] = 'Resident does not exist.';
            }


            /*
            |--------------------------------------------------------------------------
            | Check Plan
            |--------------------------------------------------------------------------
            */

            $plan = SubscriptionPlan::where('id', $data['plan_id'])
                ->where('tenant_id', $tenant->id)
                ->where('is_active', true)
                ->first();

            if (!$plan) {

                $errors[] = 'Subscription plan does not exist for this tenant.';
            }


            /*
            |--------------------------------------------------------------------------
            | Billing Cycle
            |--------------------------------------------------------------------------
            */

            if (!in_array(
                $data['billing_cycle'],
                ['monthly', 'yearly']
            )) {

                $errors[] = 'Invalid billing cycle.';
            }


            /*
            |--------------------------------------------------------------------------
            | Dates
            |--------------------------------------------------------------------------
            */

            try {

                $startsAt = Carbon::parse($data['starts_at']);

                $endsAt = Carbon::parse($data['ends_at']);

                if ($endsAt->lt($startsAt)) {

                    $errors[] =
                        'End date cannot be before start date.';
                }

            } catch (\Exception $e) {

                $errors[] = 'Invalid subscription dates.';
            }


            /*
            |--------------------------------------------------------------------------
            | Amount
            |--------------------------------------------------------------------------
            */

            if (!is_numeric($data['amount'])) {

                $errors[] = 'Amount paid must be numeric.';
            }


            /*
            |--------------------------------------------------------------------------
            | Transaction Reference
            |--------------------------------------------------------------------------
            */

            if (empty(trim($data['reference']))) {

                $errors[] =
                    'Transaction reference is required.';
            }


            if (!empty($errors)) {

                $invalidRows[] = [
                    'row' => $rowNumber,
                    'email' => $data['email'],
                    'errors' => $errors,
                ];

                continue;
            }


            $validRows[] = [
                'email' => trim($data['email']),
                'user_id' => $user->id,
                'plan_id' => $plan->id,
                'plan_name' => $plan->name,
                'billing_cycle' => $data['billing_cycle'],
                'starts_at' => $startsAt->format('Y-m-d H:i:s'),
                'ends_at' => $endsAt->format('Y-m-d H:i:s'),
                'amount' => $data['amount'],
                'reference' =>
                    trim($data['reference']),
                'gateway' =>
                    trim($data['gateway'] ?: 'manual'),
            ];
        }

        fclose($handle);


        return view(
            'dashboard.superadmin.estates.billing_import_preview',
            compact(
                'tenant',
                'validRows',
                'invalidRows'
            )
        );
    }

    public function confirm(Request $request, $tenant)
    {
        $tenant = Tenant::findOrFail($tenant);

        abort_unless(
            $tenant->import_existing_subscription_billing,
            403
        );

        $rows = decrypt(
            $request->input('import_data')
        );

        if (empty($rows)) {

            return back()->with(
                'error',
                'There are no valid records to import.'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Create CSV for queue
        |--------------------------------------------------------------------------
        */

        $filename =
            'billing-imports/' .
            $tenant->id .
            '/' .
            uniqid('billing_') .
            '.csv';

        $stream = fopen('php://temp', 'w+');

        $headers = [
            'user_id',
            'email',
            'plan_id',
            'billing_cycle',
            'starts_at',
            'ends_at',
            'amount',
            'reference',
            'gateway',
        ];

        fputcsv($stream, $headers);

        foreach ($rows as $row) {

            fputcsv($stream, [
                $row['user_id'],
                $row['email'],
                $row['plan_id'],
                $row['billing_cycle'],
                $row['starts_at'],
                $row['ends_at'],
                $row['amount'],
                $row['reference'],
                $row['gateway'],
            ]);
        }

        rewind($stream);

        Storage::disk('local')->put(
            $filename,
            stream_get_contents($stream)
        );

        fclose($stream);


        /*
        |--------------------------------------------------------------------------
        | Create Import Record
        |--------------------------------------------------------------------------
        */

        $import = BillingImport::create([

            'tenant_id' =>
                $tenant->id,

            'file_path' =>
                $filename,

            'total_rows' =>
                count($rows),

            'status' =>
                'pending',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Queue Import
        |--------------------------------------------------------------------------
        */

        ProcessBillingImport::dispatch($import);


        return redirect()
            ->route(
                'superadmin.tenant.billing.import',
                $tenant->id
            )
            ->with(
                'success',
                'Billing import has been queued successfully.'
            );
    }
}
