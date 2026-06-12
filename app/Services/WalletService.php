<?php 

namespace App\Services;

use App\Models\Wallet;
use App\Models\Transaction;

class WalletService
{
    
    public function getUserWallet($user,$tenant)
    {
         return Wallet::where([
          'user_id'=>$user->id,
          'tenant_id'=> $tenant->id
          ])->first();  
    }

    public function getAllWallet()
    {
         return Wallet::sum('balance');
    }

    public function getAlltransactsum($tenant)
    {
       return Transaction::where('tenant_id',$tenant->id)->sum('tenant_earning');
    }

}