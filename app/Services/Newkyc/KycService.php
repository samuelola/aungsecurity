<?php

namespace App\Services\Newkyc;

use App\Models\Kyc;

class KycService
{
    public function getUserKyc($user, $tenant): Kyc
    {
        return Kyc::firstOrCreate([
            'user_id' => $user->id,
            'tenant_id' => $tenant->id,
        ]);
    }

    public function markBioCompleted(Kyc $kyc, array $data): Kyc
    {
        $kyc->update(array_merge($data, [
            'bio_completed' => true,
            'current_step' => 'document'
        ]));

        return $kyc;
    }

    public function markDocCompleted(Kyc $kyc, array $data): Kyc
    {
        $kyc->update(array_merge($data, [
            'doc_completed' => true,
            'current_step' => 'face'
        ]));

        return $kyc;
    }

    public function completeKyc(Kyc $kyc, array $data): Kyc
    {
        $kyc->update(array_merge($data, [
            'kyc_completed' => true,
            'current_step' => 'completed'
        ]));

        return $kyc;
    }
}