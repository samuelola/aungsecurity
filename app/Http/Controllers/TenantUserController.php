<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kyc;
use App\Services\AuthService;
use DB;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RegisterAdminRequest;
use Carbon\Carbon;
use App\Services\AuditService;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\BlockedIp;


class TenantUserController extends Controller
{

    public AuthService $authService;
    
    public function __construct(AuthService $authService){

         $this->authService = $authService;
         
    }

    

    public function showRegistrationForm($subdomain)
  {
    // Find tenant by subdomain or $tenant
    $tenant = app('tenant');
    return view('auth.estate.tenant_register', compact('tenant'));
  }
  
  public function showResidentRegistrationForm($subdomain)
  {
    // Find tenant by subdomain or $tenant
    $tenant = app('tenant');
    return view('auth.estate.tenant_resident_register', compact('tenant'));
  }

  public function storeRegister(RegisterRequest $request, $subdomain)
  {

     $tenant = app('tenant');
     $user = $this->authService->createUser($request,$tenant);

      // Automatically log in the user
      Auth::login($user);

      // use the service here
      $this->authService->addWallet($user->id,$tenant);
      return redirect()->route('verify.email.form',$tenant->subdomain);
      //return redirect()->route('tenant_user_dashboard',$tenant->subdomain);

  }

  public function storeRegisterAdmin(RegisterAdminRequest $request, $subdomain)
  {

     $tenant = app('tenant');
     $user = $this->authService->createAdmin($request,$tenant);

      // Automatically log in the user
      Auth::login($user);

      // use the service here
      $this->authService->addWallet($user->id,$tenant);
      return redirect()->route('verifyadmin.email.form',$tenant->subdomain);
    //   return redirect()->route('tenant_admin_dashboard',$tenant->subdomain);

  }

  

   // Show login form
  public function showLoginForm($subdomain)
    {
        $tenant = Tenant::where('subdomain', $subdomain)->firstOrFail();
        return view('auth.estate.tenant_login', compact('tenant'));
    }


  public function userLogin(LoginRequest $request, $subdomain)
    {

        $emailKey = Str::lower($request->email).'|'.$request->ip();
        $ipKey = 'ip:'.$request->ip();

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

        $attempts = RateLimiter::attempts($ipKey);

        /*
        |--------------------------------------------------------------------------
        | LEVEL 3: 20 FAILURES = 24 HOUR BLOCK
        |--------------------------------------------------------------------------
        */

        if ($attempts >= 20) {

            BlockedIp::updateOrCreate(
                ['ip' => $request->ip()],
                [
                    'blocked_until' => now()->addHours(3),
                    'reason' => '20 failed login attempts',
                ]
            );

            throw ValidationException::withMessages([
                'email' => 'Too many failed attempts. IP blocked for 24 hours. contact Admin'
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


        if (RateLimiter::tooManyAttempts($emailKey, 3)) {
            $seconds = RateLimiter::availableIn($emailKey);
            
            throw ValidationException::withMessages([
                'email' => 'Too many login attempts. Try again in '.ceil($seconds / 60).' minutes.'
            ]);
        }
       
        $tenant = app('tenant');
        $credentials = $request->validated();

        // Only allow login if user belongs to this tenant
        $user = User::where('email', $credentials['email'])
                    ->where('tenant_id', $tenant->id)
                    ->first();  
                    
                
        if ($user && Auth::attempt(['email' => $user->email, 'password' => $credentials['password']])) {
            //Reset all failed attempts for this user
            RateLimiter::clear($emailKey);
            //$request->session()->regenerate();
            if($user->isUser()){

                AuditService::log('login', $user);
                activity()
                    ->causedBy($user)
                    ->withProperties([
                        'ip' => request()->ip(),
                        'browser' => request()->userAgent(),
                        'tenant_id' => $tenant->id,
                        'estate_name' => $tenant->estate_name,
                        'role' => 'user',
                    ])
                    ->log('User logged in');

                $get_userwallet = DB::table('resident_wallets')->where('user_id',auth()->id())->first();
                if(is_null($get_userwallet)){
                   $this->authService->addWallet($user->id,$tenant);
                }

                return redirect()->route('tenant_user_dashboard', $tenant->subdomain);
            }

            if ($user->isAdmin()) {

                AuditService::log('login', $user);
                activity()
                    ->causedBy($user)
                    ->withProperties([
                        'ip' => request()->ip(),
                        'browser' => request()->userAgent(),
                        'tenant_id' => $tenant->id,
                        'estate_name' => $tenant->estate_name,
                        'role' => 'admin',
                    ])
                    ->log('User logged in');

                $get_userwallet = DB::table('resident_wallets')->where('user_id',auth()->id())->first();
                if(is_null($get_userwallet)){
                   $this->authService->addWallet($user->id,$tenant);
                }

                return redirect()->route('tenant_admin_dashboard', $tenant->subdomain);
            }
            
        }

        // After failed attempt lock for 2 minutes
        RateLimiter::hit($emailKey, 120);
        // After failed 10 and 20 attempt lock for 24 hours
        RateLimiter::hit($ipKey, 86400);
        return back()->withErrors([
            'email' => 'Invalid credentials for this tenant.',
        ]);
    }  

    // Handle logout
    
    
    public function logout(Request $request, $subdomain)
    {
        $tenant = app('tenant');
        $user = Auth::user();
    
        activity()
            ->causedBy($user)
            ->withProperties([
                'ip' => $request->ip(),
                'browser' => $request->userAgent(),
                'tenant_id' => $tenant->id,
                'estate_name' => $tenant->estate_name,
                'role' => 'user',
            ])
            ->log('User logged out');
    
        AuditService::log('logout', $user);
    
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('tenant_user_login', $tenant->subdomain);
    }

    public function adminLogout(Request $request, $subdomain)
    {
        $tenant = app('tenant');
        $user = Auth::user();
        activity()
                ->causedBy($user)
                ->withProperties([
                    'ip' => request()->ip(),
                    'browser' => request()->userAgent(),
                    'tenant_id' => $tenant->id,
                    'estate_name' => $tenant->estate_name,
                    'role' => 'admin',
                ])
                ->log('User logged out');
                
        AuditService::log('logout', $user);        
                
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
            
        return redirect()->route('tenant_user_login', $tenant->subdomain);
        //return redirect()->to("http://{$subdomain}.{$host}/user_login");
    }


    public function showVerifyForm()
    {
        $tenant = app('tenant');
        $user = auth()->user();
        $expiresAt = $user?->verification_code_sent_at
        ? Carbon::parse($user?->verification_code_sent_at)
            ->addMinutes(5)
            ->timestamp
        : null;
        return view('auth.estate.verify', compact('tenant','user','expiresAt'));
    }

    public function showVerifyAdminForm()
    {
        $tenant = app('tenant');
        $user = auth()->user();
        $expiresAt = $user?->verification_code_sent_at
        ? Carbon::parse($user?->verification_code_sent_at)
            ->addMinutes(5)
            ->timestamp
        : null;
        return view('auth.estate.verify_admin', compact('tenant','user','expiresAt'));
    }

    public function verifyEmail(Request $request){

        $request->validate([
            'code' => 'required|digits:4'
        ]);
        
        try{
             $tenant = app('tenant');
             $this->authService->verifyCode($request);
             return redirect()
            ->route('tenant_user_dashboard', $tenant->subdomain);

        }catch(\Exception $e){
              return redirect()
            ->back()
            ->with('error', $e->getMessage());
        }

    }


    public function verifyAdminEmail(Request $request){

        $request->validate([
            'code' => 'required|digits:4'
        ]);
        
        try{
             $tenant = app('tenant');
             $this->authService->verifyCode($request);
             return redirect()
            ->route('tenant_admin_dashboard', $tenant->subdomain);

        }catch(\Exception $e){
              return redirect()
            ->back()
            ->with('error', $e->getMessage());
        }

    }

    

    public function resendCode(){
          
        try {
      
            $tenant = app('tenant');
            $user = auth()->user();
            $this->authService->resendVerificationCode($user->email);
            return response()->json([
            'status' => 'success',
            'message' => 'New verification code sent successfully.'
            ]);

        } catch (\Exception $e) {

             return response()->json([
             'status' => 'error',
             'message' => $e->getMessage()
             ], 400);
        }
    }


    
    public function newUserAgreement(Request $request,$tenant,$useragreefile){

         $path = storage_path(
           "app/public/pdfs/{$useragreefile}"
         );

         return response()->file($path,[
          'Content-Type' => 'application/pdf',
          'Content-Disposition' => 'inline; filename="' . basename($path) . '"'
         ]);
    }

}
