<?php 

namespace App\Services;

use App\Models\Transaction;

class TransactionService
{
    
    public function getUserTransactions($user)
    {
        return Transaction::where('user_id',$user->id)
        ->latest()
        ->get();
    }

    public function getAllTransactions(){

        return Transaction::with('user')->latest()
        ->get();
    }

}