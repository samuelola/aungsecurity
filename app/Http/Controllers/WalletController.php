<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TopupRequest;
use App\Models\Tenant;
use App\Models\Wallet;
use App\Services\PaystackService;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Services\TransactionGraphService;
use App\Services\WalletService;
use App\Services\TransactionService;

class WalletController extends Controller
{

    protected $paymentService;
    protected $invitationGraphService;
    protected $walletService;
    protected $transactionService;

    public function __construct(
        PaystackService $paymentService,
        TransactionGraphService $transactionGraphService,
        WalletService $walletService,
        TransactionService $transactionService,
    )
    {
         $this->paymentService = $paymentService;
         $this->transactionGraphService = $transactionGraphService;
         $this->walletService = $walletService;
         $this->transactionService = $transactionService;
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

        $wallet = $this->walletService->getUserWallet($user);
        $transactions = $this->transactionService->getUserTransactions($user);
        $theTransactionChart = $this->transactionGraphService->transactionChart($user);
        
        return view('dashboard.user.wallet.index',[
            'tenant'=>$tenant,
            'wallet'=>$wallet,
            'transactions' => $transactions,
            'chartData' => $theTransactionChart
        ]);
        
    }

    
}
