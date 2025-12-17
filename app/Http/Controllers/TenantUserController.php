<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenantUserController extends Controller
{
    public function showRegistrationForm($subdomain)
  {
    // Find tenant by subdomain or $tenant
    $tenant = app('tenant');
    return view('auth.estate.tenant_register', compact('tenant'));
  }

  public function storeRegister(Request $request, $subdomain)
  {
     $tenant = app('tenant');
     $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users,email,NULL,id,tenant_id,' . $tenant->id,
            'password' => 'required|string|min:6|confirmed',
     ]);

     $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'tenant_id' => $tenant->id,
            'role' => 'user',
      ]);

      // Automatically log in the user
      Auth::login($user);

      return redirect()->route('tenant_user_dashboard',$tenant->subdomain);

  }

   // Show login form
  public function showLoginForm($subdomain)
    {
        $tenant = Tenant::where('subdomain', $subdomain)->firstOrFail();
        return view('auth.estate.tenant_login', compact('tenant'));
    }


  public function userStore(Request $request, $subdomain)
    {
        $tenant = Tenant::where('subdomain', $subdomain)->firstOrFail();

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Only allow login if user belongs to this tenant
        $user = User::where('email', $credentials['email'])
                    ->where('tenant_id', $tenant->id)
                    ->first();            

        if ($user && Auth::attempt(['email' => $user->email, 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            if($user->isUser()){
                return redirect()->route('tenant_user_dashboard', $tenant->subdomain);
            }elseif ($user->isAdmin()) {
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

  
   


}
