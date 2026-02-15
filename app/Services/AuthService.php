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



class AuthService implements RegisterInterface{


    public function createUser($userRequest,$tenant){

        $user = User::create([
            'first_name' => $userRequest->first_name,
            'last_name' => $userRequest->last_name,
            'email' => $userRequest->email,
            'password' => bcrypt($userRequest->password),
            'tenant_id' => $tenant->id,
            'role' => 'user',
        ]);

        return $user;
    }
    
    public function addWallet($user_id){
        
        if(!DB::table('resident_wallets')->where('user_id',$user_id)->exists()){
            
            $currencies = DB::table('currency')
            ->where('status', 1)
            ->get();

           $userwallets = $currencies->map(function ($currency) use ($user_id){
                 
                 return [
                        'uuid'=>Str::uuid(),
                        'user_id' => $user_id,
                        'currency_code' => $currency->code,
                        'balance' => 0,
                        'status' => 1,
                        'currency_id' => $currency->id,
                        'created_at' => now(),
                        'updated_at' => now()
                 ];
           })->toArray();

           Wallet::insert($userwallets);
           return true;
        }

        
    }

   
}