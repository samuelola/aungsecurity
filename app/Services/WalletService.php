<?php 

namespace App\Services;

use App\Models\Wallet;

class WalletService
{
    
    public function getUserWallet($user)
    {
         return Wallet::where('user_id',$user->id)->first();  
    }

    public function getAllWallet()
    {
         return Wallet::sum('balance');
    }

    

}