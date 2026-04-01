<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subaccount extends Model
{
    protected $table = 'subaccounts';
    protected $fillable = [
        'tenant_id',
        'subaccount_code',
        'business_name',
        'account_number',
        'bank_code',
        'account_name'
    ];


    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class,'bank_code','code');
    }


}
