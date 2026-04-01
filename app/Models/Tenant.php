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
}
