<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class ResidentController extends Controller
{
    public function residentTransaction(Request $request, $subdomain){

        $tenant = app('tenant');
        return view('dashboard.user.transaction.index');
    }

    public function adminTransaction(Request $request, $subdomain){

        $tenant = app('tenant');
        return view('dashboard.admin.transaction.index');
    }

    
}
