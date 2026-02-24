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

  public function storeRegister(RegisterRequest $request, $subdomain)
  {

     $tenant = app('tenant');
     $user = $this->authService->createUser($request,$tenant);

      // Automatically log in the user
      Auth::login($user);

      // use the service here
      $this->authService->addWallet($user->id);
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
      $this->authService->addWallet($user->id);
      return redirect()->route('verifyadmin.email.form',$tenant->subdomain);
    //   return redirect()->route('tenant_admin_dashboard',$tenant->subdomain);

  }

  

   // Show login form
  public function showLoginForm($subdomain)
    {
        $tenant = Tenant::where('subdomain', $subdomain)->firstOrFail();
        return view('auth.estate.tenant_login', compact('tenant'));
    }


  public function userLogin(Request $request, $subdomain)
    {
        //$tenant = Tenant::where('subdomain', $subdomain)->firstOrFail();
        $tenant = app('tenant');

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Only allow login if user belongs to this tenant
        $user = User::where('email', $credentials['email'])
                    ->where('tenant_id', $tenant->id)
                    ->first();  
                    
                
        if ($user && Auth::attempt(['email' => $user->email, 'password' => $credentials['password']])) {
            // use the service here
            //$this->authService->addWallet($user->id);

            $request->session()->regenerate();
            if($user->isUser()){

                $get_userwallet = DB::table('resident_wallets')->where('user_id',auth()->id())->first();
                if(is_null($get_userwallet)){
                   $this->authService->addWallet($user->id);
                }
                
                return redirect()->route('tenant_user_dashboard', $tenant->subdomain);

            }

            if ($user->isAdmin()) {

                $get_userwallet = DB::table('resident_wallets')->where('user_id',auth()->id())->first();
                if(is_null($get_userwallet)){
                   $this->authService->addWallet($user->id);
                }
                return redirect()->route('tenant_admin_dashboard', $tenant->subdomain);
            }
            
        }

        return back()->withErrors([
            'email' => 'Invalid credentials for this tenant.',
        ]);
    }  

    // Handle logout
    public function logout(Request $request, $subdomain)
    {
        $tenant = app('tenant');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $host = request()->getHost();
        return redirect()->route('tenant_user_login', $tenant->subdomain);
        //return redirect()->to("http://{$subdomain}.{$host}/user_login");
    }

    public function adminLogout(Request $request, $subdomain)
    {
        $tenant = app('tenant');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $host = request()->getHost();
        return redirect()->route('tenant_user_login', $tenant->subdomain);
        //return redirect()->to("http://{$subdomain}.{$host}/user_login");
    }


    public function showVerifyForm()
    {
        $tenant = app('tenant');
        $user = auth()->user();
        $expiresAt = $user->verification_code_sent_at
        ? Carbon::parse($user->verification_code_sent_at)
            ->addMinutes(5)
            ->timestamp
        : null;
        return view('auth.estate.verify', compact('tenant','user','expiresAt'));
    }

    public function showVerifyAdminForm()
    {
        $tenant = app('tenant');
        $user = auth()->user();
        $expiresAt = $user->verification_code_sent_at
        ? Carbon::parse($user->verification_code_sent_at)
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
            $this->authService->resendVerificationCode(auth()->user());
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

}
