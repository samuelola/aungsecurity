<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Transaction;
use App\Models\User;

class ResidentController extends Controller
{
    public function residentTransaction(Request $request, $subdomain){

        $tenant = app('tenant');
        $transactions = Transaction::where('user_id',auth()->id())->get();
        return view('dashboard.user.transaction.index',compact('transactions'));
    }

    public function adminTransaction(Request $request, $subdomain){

        $tenant = app('tenant');
        return view('dashboard.admin.transaction.index');
    }

    public function allResidents(Request $request, $subdomain){

        $tenant = app('tenant');
        $allresidents = User::with('kyc')
                        ->latest()
                        ->where('id','!=',auth()->id())
                        ->get();
        return view('dashboard.admin.resident.index', compact('allresidents'));
    }

    

    public function details(Request $request){

        $resident = User::with('kyc')->first();
        return view('dashboard.user.resident.details', compact('resident'));
    }

    

    
}
