<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends Model
{
     use HasFactory;
     protected $guarded = [];
     protected $table = 'tenants';

     public function users()
     {
        return $this->hasMany(User::class);
     }

     public function invitations()
     {
         return $this->hasMany(VisitorInvitation::class);
     }

     public function subscriptions()
     {
         return $this->hasMany(SubscriptionPlan::class);
     }

     public function subaccount()
    {
        return $this->hasOne(Subaccount::class);
    }

    protected $casts = [
      'kyc_required' => 'boolean',
      'free_trial_enabled' => 'boolean',
      'trial_duration_days' => 'integer',
      'trial_start_date' => 'datetime',
      'trial_end_date' => 'datetime',
      'auto_convert_to_paid' => 'boolean',
      'access_fee_enabled' => 'boolean',
      'access_fee_amount' => 'decimal:2',
      'import_existing_subscription_billing' => 'boolean',
    ];
}
