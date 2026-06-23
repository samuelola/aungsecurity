<?php 

namespace App\Services\Newkyc;

use App\Models\Kyc;
use App\Models\Tenant;

class ResidentIdService
{
    public function generate(Kyc $kyc, Tenant $tenant): string
    {
        if ($kyc->resident_id) {
            return $kyc->resident_id;
        }

        $prefix = strtoupper(str_replace(' ', '', $tenant->subdomain));

        $lastId = Kyc::where('tenant_id', $tenant->id)
            ->whereNotNull('resident_id')
            ->orderByDesc('id')
            ->value('resident_id');

        $number = 1;

        if ($lastId) {
            $number = (int) substr($lastId, strrpos($lastId, '-') + 1) + 1;
        }

        return $prefix . '-ESTATE-' . str_pad($number, 6, '0', STR_PAD_LEFT);
    }
}