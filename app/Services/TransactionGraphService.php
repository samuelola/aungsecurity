<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\RegisterInterface;
use DB;
use App\Models\Wallet;
use Illuminate\Support\Str;
use App\Models\Tenant;
use App\Models\Transaction;


class TransactionGraphService {


    public function transactionChart($user){

        // Monthly transaction totals (success only)
        $monthlyTransactions = Transaction::where('user_id', $user->id)
        ->where('status', 'success')
        ->whereYear('created_at', now()->year)
        ->select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(amount) as total')
        )
        ->groupBy('month')
        ->pluck('total', 'month');
        
        // Prepare 12 months data
        $chartData = [];
        for ($i = 1; $i <= 12; $i++) {
            $chartData[] = isset($monthlyTransactions[$i])
                ? $monthlyTransactions[$i] / 100 // divide if stored in kobo
                : 0;
        }

        return $chartData;
    }
    

   
}