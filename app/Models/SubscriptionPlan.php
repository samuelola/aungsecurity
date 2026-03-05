<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'is_active'
    ];

    public function subscriptions() {
        
        return $this->hasMany(Subscription::class);
    }
}
