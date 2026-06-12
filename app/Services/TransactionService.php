<?php 

namespace App\Services;

use App\Models\Transaction;

class TransactionService
{
    
    public function getUserTransactions($user,$tenant)
    {
        return Transaction::where(['user_id'=>$user->id,'tenant_id'=>$tenant->id])
        ->latest()
        ->get();
    }

    public function getAllTransactions(){

        return Transaction::with('user')->latest()
        ->get();
    }

    public function getAllTransactionEarnings($tenant){
        
        return Transaction::with('user')->where(['gateway'=>NULL,'tenant_id'=>$tenant->id])->latest()
        ->get();
    }

}