<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tenant;
use App\Models\SubscriptionPlan;
use App\Models\VisitorInvitation;
use App\Models\Visitor;
use App\Models\Transaction;
use App\Services\TransactionService;
use App\Services\SubscriptionService;
use App\Services\AuthService;
use App\Services\InvitationService;
use App\Services\TransactionGraphService;
use DB;


class SuperAdminController extends Controller
{

    protected $transactionService;
    protected $authService;
    protected $invitationService;
    protected $subscriptionService;
    protected $transactionGraphService;


    public function __construct(
        
        TransactionService $transactionService,
        SubscriptionService $subscriptionService,
        AuthService $authService,
        InvitationService $invitationService,
        TransactionGraphService $transactionGraphService,
        )
    {
        
         $this->transactionService = $transactionService;
         $this->subscriptionService = $subscriptionService;
         $this->authService = $authService;
         $this->invitationService = $invitationService;
         $this->transactionGraphService = $transactionGraphService;
        
    }

    public function superAdminIndex()
    {
       $tenantCounts = Tenant::count();
       $totalsub = SubscriptionPlan::count();
       $totalusers = $this->authService->countUsers();
       $invitationsCount = VisitorInvitation::count();
       $visitorscount = Visitor::count(); 
       $totalamount = Transaction::pluck('amount')->sum();
       $transactions = $this->transactionService->getAllTransactions();
       $subscriptions = $this->subscriptionService->allSubscriptions();
       $subscriptionsCount = $this->subscriptionService->countActiveSubscriptions();
       $allusers  = $this->authService->getAllUsers();
       $allvisitors  = $this->invitationService->allVisitors();
       $allAccessLogs  = $this->invitationService->allAccessLogs();
       $theTransactionChartData = $this->transactionGraphService->transactionAllChartY();

       $pieChartData = [
        'Estates' => $tenantCounts,
        'Subscriptions' => $subscriptionsCount,
        'Users' => $totalusers,
        'Invitations' => $invitationsCount,
        'Visitors' => $visitorscount,
    ];

       
       return view('dashboard.superadmin.superadmin_index',compact(
        'tenantCounts','totalsub',
        'totalusers','invitationsCount',
        'visitorscount','totalamount',
        'transactions','subscriptions',
        'allusers','allvisitors','allAccessLogs',
        'theTransactionChartData',
        'pieChartData'
       ));
    }

    public function showAdminLoginForm()
    {
        return view('dashboard.superadmin.auth.login_form');
    }

    public function superadminLogin(Request $request)
    {
       
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Only allow login if user belongs to this tenant
        $user = User::where('email', $credentials['email'])
                    ->first();  
                    
                
        if ($user && Auth::attempt(['email' => $user->email, 'password' => $credentials['password']])) {
           

            if ($user->isSuperAdmin()) {

                return redirect()->route('superadmin_dashboard');
            }
            
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
    
    
    public function superAdminLogout(Request $request)
    {
    
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('superadmin_login');
    }

    public function AllTenantS()
    {
        $tenants = Tenant::latest()->get();
        return view('dashboard.superadmin.estates.alltenant',compact('tenants'));
    }

    public function estate($tenantId)
    {
        $tenant = Tenant::with('users')->findOrFail($tenantId);
        $invitationsCount = $tenant->invitations
        ->where('status','exit')
        ->count();
        $subscriptionsCount = $tenant->subscriptions->count();
        $users = $tenant->users;
        return view('dashboard.superadmin.estates.users', compact(
            'tenant',
            'users',
            'invitationsCount',
            'subscriptionsCount'
            ));
    }

    

    
}
