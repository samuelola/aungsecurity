<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TopupRequest;
use App\Models\Tenant;

class WalletController extends Controller
{
    public function fundWallet(Request $request, $subdomain){
        $tenant = app('tenant');
        return view('dashboard.user.wallet.fund',compact('tenant'));
    }

    public function saveFundWallet(TopupRequest $request,$subdomain){
       $tenant = app('tenant');
        //$user_id = auth()->user()->id ;
        $email = $request->email;
        $amount = $request->amount;
        // $rel = $this->paymentService->initalizePayment($amount,$email,$user_id);
        // return redirect()->to($rel->data->authorization_url);
    }

     public function allWallet(Request $request, $subdomain){

        $tenant = app('tenant');
        return view('dashboard.user.wallet.index',compact('tenant'));
    }

    
}
