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

class AdminTenantDashboardController extends Controller
{

    protected $transactionGraphService;
    protected $invitationGraphService;
    protected $walletService;
    protected $transactionService;
    protected $kycService;


    public function __construct(
        TransactionGraphService $transactionGraphService,
        InvitationGraphService $invitationGraphService,
        WalletService $walletService,
        TransactionService $transactionService,
        KycService $kycService
        )
    {
         $this->transactionGraphService = $transactionGraphService;
         $this->invitationGraphService = $invitationGraphService;
         $this->walletService = $walletService;
         $this->transactionService = $transactionService;
         $this->kycService = $kycService;
    }

    
   
    public function adminIndex(Request $request, $subdomain){

        $tenant = app('tenant');
        $transactions = $this->transactionService->getAllTransactions();
        $theTransactionChart = $this->transactionGraphService->transactionAllChart();
        $theInvitationChart = $this->invitationGraphService->allInvitationChart();
        $wallet = $this->walletService->getAllWallet();
        return view('dashboard.admin.admin_index',[
            'tenant' => $tenant,
            'wallet'=>$wallet,
            'transactions'=> $transactions,
            'chartData' => $theTransactionChart,
            'invitationLabels' => $theInvitationChart['labels'],
            'invitationData' => $theInvitationChart['data']
        ]);
        
    }
    
}
