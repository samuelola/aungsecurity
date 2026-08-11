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
use App\Models\Export;
use App\Jobs\SuperAdminExportResidentsJob;
use App\Exports\ResidentsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;


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

    

    public function superAdminExportResidents($tenant_id,$user_id)
    {
        $export = Export::create([
            'tenant_id' => $tenant_id,
            'user_id' => $user_id,
            'status' => 'processing',
        ]);

        // this dispatch job to jobs table
        // after job table is run and empty the job ExportResidentsJob class is run
        SuperAdminExportResidentsJob::dispatch($export->id);

        return response()->json([
            'export_id' => $export->id,
            'message' => 'Export started'
        ]);
    }

    public function exportSuperAdminStatus($tenant_domain,$export_id)
    {
        $export = Export::findOrFail($export_id);
        return response()->json([
            'status' => $export->status,
            'download_url' => $export->status === 'done'
                ? route('superadmin.residents.exports.download', [
                        $tenant_domain,
                        $export_id
                    ])
                : null
        ]);
    }

    public function downloadSuperAdminExport($subdomain,$id)
    {
        $export = Export::findOrFail($id);

        if ($export->status !== 'done') {
            return response()->json(['message' => 'File not ready'], 422);
        }
        
        return redirect(Storage::disk('r2')->url($export->file_path));
    }

    public function toggleTenantKyc($tenant)
    {
        $tenantModel = Tenant::findOrFail($tenant);

        $tenantModel->update([
            'kyc_required' => !$tenantModel->kyc_required,
        ]);

        return back()->with(
            'success',
            $tenantModel->kyc_required
                ? 'KYC has been enabled for '.$tenantModel->estate_name.' Estate'
                : 'KYC has been disabled for '.$tenantModel->estate_name.' Estate'
        );
    }

    public function trialSettings($tenant)
    {
        $tenant = Tenant::findOrFail($tenant);

        return view(
            'dashboard.superadmin.estates.trial_settings',
            compact('tenant')
        );
    }

    public function updateTrialSettings(Request $request, $tenant)
        {
        $tenant = Tenant::findOrFail($tenant);

        $validated = $request->validate([
            'trial_duration' => [
                'required',
                'in:7,14,30,60,custom'
            ],

            'custom_trial_days' => [
                'nullable',
                'required_if:trial_duration,custom',
                'integer',
                'min:1'
            ],

            'trial_start_date' => [
                'required',
                'date'
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | Trial Enabled
        |--------------------------------------------------------------------------
        */

        $trialEnabled = $request->boolean('trial_enabled');


        /*
        |--------------------------------------------------------------------------
        | Determine Trial Duration
        |--------------------------------------------------------------------------
        */

        if ($validated['trial_duration'] === 'custom') {

            $trialDays = (int) $validated['custom_trial_days'];

        } else {

            $trialDays = (int) $validated['trial_duration'];

        }


        /*
        |--------------------------------------------------------------------------
        | Calculate Trial Start Date
        |--------------------------------------------------------------------------
        */

        $startDate = Carbon::parse(
            $validated['trial_start_date']
        )->startOfDay();


        /*
        |--------------------------------------------------------------------------
        | Calculate Trial End Date
        |--------------------------------------------------------------------------
        |
        | Example:
        |
        | Start:    2026-08-03
        | Duration: 7 days
        |
        | End:      2026-08-10
        |
        */

        $endDate = $startDate
            ->copy()
            ->addDays($trialDays);


        /*
        |--------------------------------------------------------------------------
        | Save Trial Settings
        |--------------------------------------------------------------------------
        */

        $tenant->update([

            'free_trial_enabled' => $trialEnabled,

            'trial_duration_days' => $validated['trial_duration'],
            'custom_trial_days' =>
                $validated['trial_duration'] === 'custom'
                    ? $validated['custom_trial_days']
                    : null,

            'trial_start_date' => $startDate,

            'trial_end_date' => $endDate,

        ]);


        return redirect()
            ->route(
                'superadmin.tenant.trial.settings',
                $tenant->id
            )
            ->with(
                'success',
                'Trial settings updated successfully.'
            );

        }

        public function accessFeeSettings($tenant)
        {
            $tenant = Tenant::findOrFail($tenant);

            return view(
                'dashboard.superadmin.estates.tenant_access_fee_settings',
                compact('tenant')
            );
        }

        public function updateAccessFeeSettings(Request $request, $tenant)
        {
            $tenant = Tenant::findOrFail($tenant);

            $validated = $request->validate([
                'access_fee_amount' => [
                    'required',
                    'numeric',
                    'min:0',
                ],

                'access_fee_timing' => [
                    'required',
                    'in:immediately,after_trial',
                ],
            ]);

            $accessFeeEnabled = $request->boolean('access_fee_enabled');

            $tenant->update([
                'access_fee_enabled' => $accessFeeEnabled,
                'access_fee_amount' => $validated['access_fee_amount'],
                'access_fee_timing' => $validated['access_fee_timing'],
            ]);

            return redirect()
                ->route(
                    'superadmin.tenant.access.fee.settings',
                    $tenant->id
                )
                ->with(
                    'success',
                    'Resident access enablement fee settings updated successfully.'
                );
        }


        public function toggleBillingImport($tenantId)
        {
            $tenant = Tenant::findOrFail($tenantId);

            $tenant->update([
                'import_existing_subscription_billing' =>
                    !$tenant->import_existing_subscription_billing
            ]);

            return back()->with(
                'success',
                $tenant->import_existing_subscription_billing
                    ? 'Existing billing import has been enabled.'
                    : 'Existing billing import has been disabled.'
            );

            // return back()->with(
            //     'success',
            //     'Existing billing import setting updated successfully.'
            // );
        }


        public function billingImport($tenant)
        {
            $tenant = Tenant::findOrFail($tenant);

            abort_unless($tenant->import_existing_subscription_billing, 403);

            $plans = SubscriptionPlan::where('tenant_id', $tenant->id)
                ->where('is_active', true)
                ->orderBy('name')
                ->get();

            return view(
                'dashboard.superadmin.estates.billing_import',
                compact('tenant', 'plans')
            );
        }

        public function downloadBillingTemplate($tenant)
        {
            $tenant = Tenant::findOrFail($tenant);

            abort_unless($tenant->import_existing_subscription_billing, 403);

            $headers = [
                'user_id',
                'email',
                'plan_id',
                'billing_cycle',
                'starts_at',
                'ends_at',
                'amount',
                'reference',
                'gateway',
            ];

            $filename = 'billing_import_template.csv';

            $callback = function () use ($headers) {

                $file = fopen('php://output', 'w');

                fputcsv($file, $headers);

                fputcsv($file, [
                    '1',
                    'resident@example.com',
                    '1',
                    'yearly',
                    '2026-01-01',
                    '2026-12-31',
                    '10000',
                    'MANUAL-000001',
                    'manual',
                ]);

                fclose($file);
            };

            return response()->streamDownload(
                $callback,
                $filename,
                [
                    'Content-Type' => 'text/csv',
                ]
            );
        }

    
}
