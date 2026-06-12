<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Kyc extends Model
{
    protected $guarded = [];

    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'phone',
                'address',
                'lga_id',
                'state_id',
                'occupants',
                'flat_number',
                'agent_name',
                'agent_number',
            ])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class,'lga_id');
    }
}

