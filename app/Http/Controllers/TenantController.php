<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class TenantController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
    'first_name' => ['required', 'string', 'regex:/^[A-Za-z\s\-]+$/'],
    'last_name'  => ['required', 'string', 'regex:/^[A-Za-z\s\-]+$/'],

    'subdomain' => [
        'required',
        'regex:/^[a-z0-9-]+$/', // no spaces, lowercase, hyphens allowed
        'unique:tenants,subdomain'
    ],
    ]);


    $tenant = Tenant::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        //'email'=>   $request->email,
        'subdomain' => strtolower($request->subdomain)
    ]);

    $host = request()->getHost();
    return redirect("http://{$tenant->subdomain}.{$host}/estate_register");
   
    // return redirect("http://{$tenant->subdomain}.aungsecurity.test");
}

    public function create(Request $request)
    {
        return view('auth.tenant_register');
    }

}
