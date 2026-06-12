<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    protected $table= 'access_logs';
    
    protected $guarded = [];

    public function Invitation()
    {
        return $this->belongsTo(VisitorInvitation::class,'invitation_id');
    }
}
