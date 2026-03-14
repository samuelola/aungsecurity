<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tenant;

class SuperAdminController extends Controller
{
    public function superAdminIndex()
    {
       return view('dashboard.superadmin.superadmin_index');
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
        $users = $tenant->users;
        return view('dashboard.superadmin.estates.users', compact('tenant','users'));
    }

    
}
