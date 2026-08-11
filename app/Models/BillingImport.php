<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingImport extends Model
{
    protected $fillable = [
        'tenant_id',
        'file_path',
        'total_rows',
        'processed_rows',
        'successful_rows',
        'failed_rows',
        'status',
        'error_message',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}