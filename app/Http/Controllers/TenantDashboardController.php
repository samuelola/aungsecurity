<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Kyc;
use App\Models\Wallet;
use App\Models\Transaction;

class TenantDashboardController extends Controller
{
    public function index(Request $request, $subdomain){

        $tenant = app('tenant');
        $user = auth()->user();

        $kyc = Kyc::firstOrCreate([
            'user_id' => $user->id,
            'tenant_id' => $tenant->id,
        ]);

        $wallet = Wallet::where('user_id',$user->id)->first();
        $transactions = Transaction::where('user_id',auth()->id())->get();
        //$tenant = Tenant::where('subdomain', $subdomain)->firstOrFail();
        return view('dashboard.user.tenant_index',compact('tenant','kyc','wallet','transactions'));
    }

    public function adminIndex(Request $request, $subdomain){

        $tenant = app('tenant');
        return view('dashboard.admin.admin_index',compact('tenant'));
    }

    
}
