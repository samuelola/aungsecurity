<?php

namespace App\Jobs;

use App\Models\Export;
use App\Models\Tenant;
use App\Exports\ResidentsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SuperAdminExportResidentsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $exportId;

    public function __construct($exportId)
    {
        $this->exportId = $exportId;
    }

    public function handle()
    {
        
        $export = Export::findOrFail($this->exportId);
        $tenant = Tenant::findOrFail($export->tenant_id);
        $subdomain = strtolower($tenant->subdomain);

        $fileName = 'exports/residents_' .
                $subdomain . '_' .
                now()->format('Ymd_His') .
                '.xlsx';

        // $fileName = 'exports/residents_' . $export->tenant_id . '_' . time() . '.xlsx';
        

        Excel::store(
            new ResidentsExport($export->tenant_id),
            $fileName,
            'public'
        );

        $export->update([
            'file_path' => $fileName,
            'status' => 'done'
        ]);
    }
}