<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $guarded = [];

    // A visitor can have many invitations
    public function invitations()
    {
        return $this->hasMany(VisitorInvitation::class);
    }
}
