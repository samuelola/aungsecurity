<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Kyc;
use App\Models\Subscription;

class TenantAdminSidebarComposer
{
    public function compose(View $view)
    {
        $tenant = app('tenant');
        $user = auth()->user();

        $kyc = null;
        $canAccessProtectedFeatures = false;

        if ($tenant && $user) {

            $kyc = Kyc::where('tenant_id', $tenant->id)
                ->where('user_id', $user->id)
                ->first();

            $canAccessProtectedFeatures =
                !$tenant->kyc_required ||
                ($kyc && $kyc->kyc_completed);
        }

        $view->with([
            'tenant' => $tenant,
            'kyc' => $kyc,
            'canAccessProtectedFeatures' => $canAccessProtectedFeatures,
        ]);
    }
}