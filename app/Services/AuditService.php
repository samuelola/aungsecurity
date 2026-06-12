<?php
namespace App\Services;

use App\Models\AuditLog;
use Illuminate\Support\Facades\Auth;

class AuditService
{
    public static function log(
        string $action,
        $model,
        array $old = null,
        array $new = null
    ) {

    $tenant = app('tenant');
        AuditLog::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'model_type' => $model ? get_class($model) : null,
            'model_id' => $model?->id,
            'old_values' => $old ? json_encode($old) : null,
            'new_values' => $new ? json_encode($new) : null,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'tenant_id' =>  $tenant->id,
            'login_time' => NOW()
        ]);
    }
}