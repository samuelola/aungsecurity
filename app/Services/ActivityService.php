<?php
namespace App\Services;

use App\Models\AuditLog;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class ActivityService
{
    public function log() {

          return Activity::with('causer')
            ->latest()
            ->paginate(50);

    }
}