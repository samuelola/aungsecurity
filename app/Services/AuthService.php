<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\RegisterInterface;
use DB;
use App\Models\Wallet;
use Illuminate\Support\Str;
use App\Models\Tenant;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmailMail;
use Carbon\Carbon;
use App\Mail\TenantResetPasswordMail;


class AuthService implements RegisterInterface{


   public function generateVerificationCode($user){
    $code = rand(1000, 9999);
    $user->update([
        'verification_code' => $code,
        'verification_code_sent_at' => now(),
    ]);

    // Queue email
    Mail::to($user->email)->queue(new VerifyEmailMail($user));

    }

    public function generateVerificationCodeResetPass($user){
    $code = rand(1000, 9999);
    $user->update([
        'verification_code' => $code,
        'verification_code_sent_at' => now(),
    ]);

    // Queue email
     Mail::to($user->email)->queue(new TenantResetPasswordMail($user));

    }


    

    public function createUser($userRequest,$tenant){

        $user = User::create([
            'first_name' => $userRequest->first_name,
            'last_name' => $userRequest->last_name,
            'email' => $userRequest->email,
            'password' => bcrypt($userRequest->password),
            'tenant_id' => $tenant->id,
            'role' => 'user',
        ]);

        $this->generateVerificationCode($user);
        return $user;
    }

    public function loginVerifyUserEmail($user){

         $this->generateVerificationCode($user);
    }

    public function loginVerifyAdminEmail($user){

         $this->generateVerificationCode($user);
    }

    
    public function createAdmin($adminRequest,$tenant){

        $admin = User::create([
            'first_name' => $adminRequest->first_name,
            'last_name' => $adminRequest->last_name,
            'email' => $adminRequest->email,
            'password' => bcrypt($adminRequest->password),
            'tenant_id' => $tenant->id,
            'role' => 'admin',
        ]);

        $this->generateVerificationCode($admin);

        return $admin;
    }

    public function verifyCode($request){
         
        $user = auth()->user();
        if (!$user) {
            throw new \Exception('User not authenticated.');
        }

        if (!$user->verification_code) {
          throw new \Exception('No verification code found.');
        }

        // Check expiration (5 minutes)
        $expiresAt = Carbon::parse($user->verification_code_sent_at)->addMinutes(5);

        if (Carbon::now()->greaterThan($expiresAt)) {
            throw new \Exception('Your verification code has expired. Please resend a new one.');
        }

        if ($user->verification_code != $request->code) {
            throw new \Exception("Invalid Code");
        }


        if ($user->verification_code == $request->code) {

            $user->update([
                'email_verified_at' => now(),
                'verification_code' => null,
                'verification_code_sent_at' => null
            ]);

           return true;
        }

        
    }


    public function verifyNewCode($request,$email){
         
        $user = User::where('email',$email)->first();
        if (!$user) {
            throw new \Exception('User not authenticated.');
        }

        if (!$user->verification_code) {
          throw new \Exception('No verification code found.');
        }

        // Check expiration (5 minutes)
        $expiresAt = Carbon::parse($user->verification_code_sent_at)->addMinutes(5);

        if (Carbon::now()->greaterThan($expiresAt)) {
            throw new \Exception('Your verification code has expired. Please resend a new one.');
        }

        if ($user->verification_code != $request->code) {
            throw new \Exception("Invalid Code");
        }


        if ($user->verification_code == $request->code) {

            $user->update([
                'email_verified_at' => now(),
                'verification_code' => null,
                'verification_code_sent_at' => null
            ]);

           return true;
        }

        
    }


    public function resendVerificationCode($email){

        $user = User::where('email',$email)->first();
        if (!$user) {
            throw new \Exception('User not authenticated.');
        }

        // Prevent spam (30 sec cooldown)
        if ($user->verification_code_sent_at &&
            Carbon::parse($user->verification_code_sent_at)->addSeconds(30)->isFuture()) {

            throw new \Exception('Please wait before requesting a new code.');
        }

        $code = rand(1000, 9999);

        $user->update([
            'verification_code' => $code,
            'verification_code_sent_at' => now(),
        ]);

        Mail::to($user->email)->queue(new VerifyEmailMail($user));

        return true;
    }


    public function passwordSendCode($user){

        if (!$user) {
            throw new \Exception('No account found with that email.');
        }

        $this->generateVerificationCodeResetPass($user);
        
        return true;

    }

    
    public function addWallet($user_id){
        
        if(!DB::table('resident_wallets')->where('user_id',$user_id)->exists()){
            
            $currencies = DB::table('currency')
            ->where('status', 1)
            ->get();

           $userwallets = $currencies->map(function ($currency) use ($user_id){
                 
                 return [
                        'uuid'=>Str::uuid(),
                        'user_id' => $user_id,
                        'currency_code' => $currency->code,
                        'balance' => 0,
                        'status' => 1,
                        'currency_id' => $currency->id,
                        'created_at' => now(),
                        'updated_at' => now()
                 ];
           })->toArray();

           Wallet::insert($userwallets);
           return true;
        }

        
    }


    public function getAllUsers(){
        
        return User::with(['kyc'])->simplePaginate(10);

    }

    public function countUsers(){
        return User::where('role','!=','superadmin')->count();
    }

   
}