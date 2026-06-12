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
use App\Services\WalletService;
use App\Models\VisitorInvitation;
use App\Services\TransactionService;
use App\Services\KycService;
use App\Services\InvitationService;

class AdminTenantDashboardController extends Controller
{

    protected $transactionGraphService;
    protected $invitationGraphService;
    protected $walletService;
    protected $transactionService;
    protected $kycService;
    protected $invitationService;


    public function __construct(
        TransactionGraphService $transactionGraphService,
        InvitationGraphService $invitationGraphService,
        WalletService $walletService,
        TransactionService $transactionService,
        KycService $kycService,
        InvitationService $InvitationService
        )
    {
         $this->transactionGraphService = $transactionGraphService;
         $this->invitationGraphService = $invitationGraphService;
         $this->walletService = $walletService;
         $this->transactionService = $transactionService;
         $this->kycService = $kycService;
         $this->invitationService = $InvitationService;
    }

    
   
    public function adminIndex(Request $request, $subdomain){

        $tenant = app('tenant');
        $user = auth()->user();
        $transactions = $this->transactionService->getAllTransactions();
        $transactionEarnings = $this->transactionService->getAllTransactionEarnings($tenant);
        $theTransactionChart = $this->transactionGraphService->transactionAllChart();
        $theAdminTransactionChart = $this->transactionGraphService->admintransactionAllChart();
        $theInvitationChart = $this->invitationGraphService->allInvitationChart($tenant);
        $wallet = $this->walletService->getAllWallet();
        $earning = $this->walletService->getAlltransactsum($tenant);
        $kyc = $this->kycService->createKyc($user,$tenant);
        $getkyc = $this->kycService->getKyc($user,$tenant);
        $visitor_count = $this->invitationService->adminCountVisitors($tenant);

        
        return view('dashboard.admin.admin_index',[
            'tenant' => $tenant,
            'wallet'=>$wallet,
            'transactions'=> $transactions,
            'chartData' => $theTransactionChart,
            'adminChartData' => $theAdminTransactionChart,
            'invitationLabels' => $theInvitationChart['labels'],
            'invitationData' => $theInvitationChart['data'],
            'earning' =>$earning,
            'transactionEarnings' => $transactionEarnings,
            'kyc'=> $kyc,
            'visitor_count' => $visitor_count,
            'getkyc'=> $getkyc
        ]);
        
    }
    
}
