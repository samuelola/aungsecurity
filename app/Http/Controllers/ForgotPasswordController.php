<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Mail\TenantResetPasswordMail;
use App\Models\PasswordResetCode;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class ForgotPasswordController extends Controller
{

    public AuthService $authService;
    
    public function __construct(AuthService $authService){

         $this->authService = $authService;
         
    }

    public function showForgotPasswordForm()
    {
        $tenant = app('tenant');
        return view('auth.estate.forgot-password', compact('tenant'));
    }

    public function sendResetCode(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $tenant = app('tenant');
        $user = User::where('email', $request->email)->where('tenant_id', $tenant->id)->first();

        try{

         $this->authService->passwordSendCode($user);
         Session::put('reset_email', $request->email);
         return redirect()->route('verify_code_password', $tenant->subdomain)
                         ->with('success', 'Reset code sent to your email.');

        }catch(\Exception $e){
             return redirect()
             ->back()
             ->with('error', $e->getMessage());
        }
    }

    public function showResetPasswordForm()
    {
        $tenant = app('tenant');
        return view('auth.estate.reset-password', compact('tenant'));
    }

    public function verifyCodePassword(Request $request){

        $tenant = app('tenant');
        $email = session('reset_email');
        $user = User::where('email',$email)->first();
        $expiresAt = $user->verification_code_sent_at
        ? Carbon::parse($user->verification_code_sent_at)
            ->addMinutes(5)
            ->timestamp
        : null;
        return view('auth.estate.veri_code_password', compact('tenant','user','expiresAt'));
    }

    public function resendResetCode(){
         
        try {

            $tenant = app('tenant');
            $email = session('reset_email');
            $this->authService->resendVerificationCode($email);
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

    public function verifyPassCode(Request $request)
    {
        $request->validate([
            'code' => 'required|digits:4'
        ]);

        $tenant = app('tenant');
        $email = session('reset_email');
        try{
             $tenant = app('tenant');
             $this->authService->verifyNewCode($request,$email);
             return redirect()->route('tenant_reset_password_form', $tenant->subdomain);

        }catch(\Exception $e){
              return redirect()
            ->back()
            ->with('error', $e->getMessage());
        }

    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);

        $tenant = app('tenant');
        $email = session('reset_email');
        $user = User::where('email',$email)->first();
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        Session::forget('reset_email');

        return redirect()->route('tenant_user_login',$tenant->subdomain);
    }

}
