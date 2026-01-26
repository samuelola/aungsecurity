<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorInvitation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'visitor_invitation';

    // Invitation belongs to a visitor
    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }

    // Invitation belongs to a resident (user)
    public function resident()
    {
        return $this->belongsTo(\App\Models\User::class, 'resident_id');
    }

    // Invitation has many access logs
    // public function accessLogs()
    // {
    //     return $this->hasMany(\App\Models\AccessLog::class, 'invitation_id');
    // }
}
