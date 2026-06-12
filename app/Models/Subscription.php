<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Status;

class Subscription extends Model
{
    protected $fillable = [
        'user_id',
        'subscription_plan_id',
        'billing_cycle',
        'starts_at',
        'ends_at',
        'status',
        'authorization_code',
        'customer_code',
        'reminder_sent_at',
        'auto_renew_queued',
        'tenant_id'
    ];

    protected $dates = [
        'starts_at',
        'ends_at'
    ];

    public function plan()
    {
        return $this->belongsTo(SubscriptionPlan::class, 'subscription_plan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
