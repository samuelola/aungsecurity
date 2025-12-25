<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TopupRequest;
use App\Models\Tenant;
use App\Models\Wallet;
use App\Services\PaystackService;
use App\Models\Transaction;

class WalletController extends Controller
{

    protected $paymentService;

    public function __construct(PaystackService $paymentService)
    {
         $this->paymentService = $paymentService;
    }

    public function fundWallet(Request $request, $subdomain){
        $tenant = app('tenant');
        return view('dashboard.user.wallet.fund',compact('tenant'));
    }

    public function saveFundWallet(TopupRequest $request,$subdomain){

        $tenant = app('tenant');
        $user = auth()->user();
        $email = $request->email;
        $amount = $request->amount;

        $rel = $this->paymentService->initalizePayment($amount,$email,$tenant);
        
        return redirect()->to($rel->data->authorization_url);
    }


    public function paymentCallback(Request $request,$domain)
    {
        $reference = $request->reference;
        $user_id = $request->user_id;
        $result = $this->paymentService->verifyPayment($reference);
        if($result){
            
            session()->flash('success', "Topup is successful");
            return redirect()->route('allwallet',$domain);
        } 
    }

     public function allWallet(Request $request, $subdomain){

        $tenant = app('tenant');
        $user = auth()->user();
        $wallet = Wallet::where('user_id',$user->id)->first();
        $transactions = Transaction::where('user_id',auth()->id())->get();
        return view('dashboard.user.wallet.index',compact('tenant','wallet','transactions'));
    }

    
}
