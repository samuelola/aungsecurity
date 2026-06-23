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
use App\Services\ActivityService;
use DB;
use App\Models\Kyc;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\BlockedIp;
use App\Http\Requests\SuperadminLoginRequest;
use Carbon\Carbon;


class SuperAdminController extends Controller
{

    protected $transactionService;
    protected $authService;
    protected $invitationService;
    protected $subscriptionService;
    protected $transactionGraphService;
    protected $activityService;


    public function __construct(
        
        TransactionService $transactionService,
        SubscriptionService $subscriptionService,
        AuthService $authService,
        InvitationService $invitationService,
        TransactionGraphService $transactionGraphService,
        ActivityService $activityService
        )
    {
        
         $this->transactionService = $transactionService;
         $this->subscriptionService = $subscriptionService;
         $this->authService = $authService;
         $this->invitationService = $invitationService;
         $this->transactionGraphService = $transactionGraphService;
         $this->activityService = $activityService;
        
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
       $allactivities = $this->activityService->log();

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
        'pieChartData',
        'allactivities'
       ));
    }

    public function showAdminLoginForm()
    {
        return view('dashboard.superadmin.auth.login_form');
    }

    public function superadminLogin(SuperadminLoginRequest $request)
    {
       
        $credentials = $request->validated();

        $emailKeyy = Str::lower($request->email).'|'.$request->ip();
        $ipKeyy = 'ip:'.$request->ip();

                /*
        |--------------------------------------------------------------------------
        | CHECK IF IP IS BLOCKED
        |--------------------------------------------------------------------------
        */

        $blocked = BlockedIp::where('ip', $request->ip())
        ->where('blocked_until', '>', now())
        ->first();

        if ($blocked) {

            $seconds = now()->diffInSeconds($blocked->blocked_until);

            throw ValidationException::withMessages([
                'email' => 'Your IP is temporarily blocked. Try again in '
                    . ceil($seconds / 60)
                    . ' minutes.'
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | GET TOTAL FAILED ATTEMPTS
        |--------------------------------------------------------------------------
        */

        $attempts = RateLimiter::attempts($ipKeyy);

        /*
        |--------------------------------------------------------------------------
        | LEVEL 3: 20 FAILURES = 24 HOUR BLOCK
        |--------------------------------------------------------------------------
        */

        if ($attempts >= 20) {

            BlockedIp::updateOrCreate(
                ['ip' => $request->ip()],
                [
                    'blocked_until' => now()->addHours(24),
                    'reason' => '20 failed login attempts',
                ]
            );

            throw ValidationException::withMessages([
                'email' => 'Too many failed attempts. IP blocked for 24 hours.'
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | LEVEL 2: 10 FAILURES = 30 MINUTE BLOCK
        |--------------------------------------------------------------------------
        */

        if ($attempts >= 10) {

            BlockedIp::updateOrCreate(
                ['ip' => $request->ip()],
                [
                    'blocked_until' => now()->addMinutes(30),
                    'reason' => '10 failed login attempts',
                ]
            );

            throw ValidationException::withMessages([
                'email' => 'Too many failed attempts. IP blocked for 30 minutes.'
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | LEVEL 1: 3 FAILURES = 2 MINUTE LOCK
        |--------------------------------------------------------------------------
        */


        if (RateLimiter::tooManyAttempts($emailKeyy, 3)) {
            $seconds = RateLimiter::availableIn($emailKeyy);
            
            throw ValidationException::withMessages([
                'email' => 'Too many login attempts. Try again in '.ceil($seconds / 60).' minutes.'
            ]);
        }

        // Only allow login if user belongs to this user
        $user = User::where('email', $credentials['email'])
                    ->first();  
                    
                
        if ($user && Auth::guard('superadmin')->attempt(['email' => $user->email, 'password' => $credentials['password']])) {
             
            //Reset all failed attempts for this user
            RateLimiter::clear($emailKeyy);

            if ($user->isSuperAdmin()) {

                return redirect()->route('superadmin_dashboard');
            }
            
        }


         // After failed attempt lock for 2 minutes
        RateLimiter::hit($emailKeyy, 120);
        // After failed 10 and 20 attempt lock for 24 hours
        RateLimiter::hit($ipKeyy, 86400);
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
    
    
    public function superAdminLogout(Request $request)
    {
    
        Auth::guard('superadmin')->logout();
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

    public function getSuperEmergency($tenant,$user)
    {
        
        $emergency = Kyc::with(['user','tenant'])
                          ->where('tenant_id',$tenant)
                          ->where('user_id',$user)
                          ->first();

        return view('dashboard.superadmin.estates.emergency', compact(
            'emergency'
        ));               
    }

    public function regenerateSuperAdminEmergencyPin($tenant, $user)
    {
        $kyc = Kyc::where('user_id', $user)
        ->where('tenant_id', $tenant)
        ->firstOrFail();

        // Generate new secure pin
        $newPin = random_int(100000, 999999);

        $kyc->update([
            'emergency_pin' => $newPin,
            'emergency_pin_expires_at' => now()->addHours(3),
            //'emergency_pin_expires_at' => now()->addMinutes(2),
        ]);

        return response()->json([
            'success' => true,
            'emergency_pin' => $newPin,
            'expires_at' => $kyc->fresh()->emergency_pin_expires_at,
        ]);
    }

    public function regenerateSuperAdminVisitorEmergencyPin($tenant, $user)
    {
        
        $kyc = Kyc::where('user_id', $user)
            ->where('tenant_id', $tenant)
            ->firstOrFail();

        // Generate new secure pin
        $newPin = random_int(100000, 999999);

        $kyc->update([
            'emergency_visitor_pin' => $newPin
        ]);

        return response()->json([
            'success' => true,
            'emergency_visitor_pin' => $newPin
        ]);
    }

    

    

    
}
