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

class TenantDashboardController extends Controller
{

    protected $transactionGraphService;
    protected $invitationGraphService;

    public function __construct(TransactionGraphService $transactionGraphService,InvitationGraphService $invitationGraphService)
    {
         $this->transactionGraphService = $transactionGraphService;
         $this->invitationGraphService = $invitationGraphService;
    }

    public function index(Request $request, $subdomain){

        $tenant = app('tenant');
        $user = auth()->user();

        $kyc = Kyc::firstOrCreate([
            'user_id' => $user->id,
            'tenant_id' => $tenant->id,
        ]);

        $wallet = Wallet::where('user_id',$user->id)->first();
        $transactions = Transaction::where('user_id',$user->id)
        ->latest()
        ->get();

        $theTransactionChart = $this->transactionGraphService->transactionChart($user);
        $theInvitationChart = $this->invitationGraphService->invitationChart($user);
        

        return view('dashboard.user.tenant_index',[
            'tenant' => $tenant,
            'kyc' => $kyc,
            'wallet'=>$wallet,
            'transactions'=> $transactions,
            'chartData' => $theTransactionChart,
            'invitationLabels' => $theInvitationChart['labels'],
            'invitationData' => $theInvitationChart['data']
            ]);
    }

   

    
}
