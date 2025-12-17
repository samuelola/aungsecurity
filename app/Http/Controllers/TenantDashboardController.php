<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class TenantDashboardController extends Controller
{
    public function index(Request $request, $subdomain){

        $tenant = app('tenant');
        //$tenant = Tenant::where('subdomain', $subdomain)->firstOrFail();
        return view('dashboard.user.tenant_index',compact('tenant'));
    }

    public function adminIndex(Request $request, $subdomain){

        $tenant = app('tenant');
        return view('dashboard.admin.admin_index',compact('tenant'));
    }

    
}
