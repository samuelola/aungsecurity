<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Kyc;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Services\TransactionGraphService;
use App\Services\InvitationGraphService;
use App\Models\VisitorInvitation;
use App\Services\WalletService;
use App\Services\TransactionService;
use App\Services\KycService;
use App\Services\SubscriptionService;

class TenantDashboardController extends Controller
{

    protected $transactionGraphService;
    protected $invitationGraphService;
    protected $walletService;
    protected $transactionService;
    protected $kycService;
    protected $subscriptionService;

    public function __construct(
        TransactionGraphService $transactionGraphService,
        InvitationGraphService $invitationGraphService,
        WalletService $walletService,
        TransactionService $transactionService,
        KycService $kycService,
        SubscriptionService $subscriptionService
        )
    {
         $this->transactionGraphService = $transactionGraphService;
         $this->invitationGraphService = $invitationGraphService;
         $this->walletService = $walletService;
         $this->transactionService = $transactionService;
         $this->kycService = $kycService;
         $this->subscriptionService = $subscriptionService;
    }

    public function index(Request $request, $subdomain){

        $tenant = app('tenant');
        $user = auth()->user();

        $kyc = $this->kycService->createKyc($user,$tenant);
        $wallet = $this->walletService->getUserWallet($user);
        $transactions = $this->transactionService->getUserTransactions($user);
        $theTransactionChart = $this->transactionGraphService->transactionChart($user);
        $theInvitationChart = $this->invitationGraphService->invitationChart($user);
        $subscription = $this->subscriptionService->getSubscription();
        
         
        return view('dashboard.user.tenant_index',[
            'tenant' => $tenant,
            'kyc' => $kyc,
            'wallet'=>$wallet,
            'transactions'=> $transactions,
            'chartData' => $theTransactionChart,
            'invitationLabels' => $theInvitationChart['labels'],
            'invitationData' => $theInvitationChart['data'],
            'subscription' => $subscription['subscription'],
            'progress'     => $subscription['progress'],
            'daysLeft'     => $subscription['daysLeft']
            ]);
    }

    
}
