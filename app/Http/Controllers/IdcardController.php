<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Kyc;

class IdcardController extends Controller
{

public function show()
{
    $tenant = app('tenant');
    $user = auth()->user();

    $kyc = Kyc::where('user_id', $user->id)
        ->where('tenant_id', $tenant->id)
        ->firstOrFail();

    return view('dashboard.user.resident.card', compact(
        'tenant',
        'user',
        'kyc'
    ));
    
}

public function adminShowCard()
{
    $tenant = app('tenant');
    $user = auth()->user();

    $kyc = Kyc::where('user_id', $user->id)
        ->where('tenant_id', $tenant->id)
        ->firstOrFail();

    return view('dashboard.admin.resident.card', compact(
        'tenant',
        'user',
        'kyc'
    ));
    
}


}
