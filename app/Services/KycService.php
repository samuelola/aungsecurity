<?php 

namespace App\Services;

use App\Models\Kyc;

class KycService
{
    
    public function createKyc($user, $tenant)
    {
          return Kyc::firstOrCreate([
            'user_id' => $user->id,
            'tenant_id' => $tenant->id,
          ]);
    }

    

}