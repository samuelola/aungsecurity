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
    'estate_name'  => ['required', 'string', 'regex:/^[A-Za-z\s\-]+$/'],
    
    'subdomain' => [
        'required',
        'regex:/^[a-z0-9-]+$/', // no spaces, lowercase, hyphens allowed
        'unique:tenants,subdomain'
    ],
    'service_agreement' => 'accepted',
    ],
      
    [
    'service_agreement.accepted' => 'You must accept the Service Agreement to continue.',
    ]
    
    
    );


    $tenant = Tenant::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'estate_name'=>   $request->estate_name,
        'subdomain' => strtolower($request->subdomain),
        'service_agreement_accepted' => true,
        'service_agreement_accepted_at' => now()
    ]);

    // for localhost
    $host = request()->getHost();
    return redirect("http://{$tenant->subdomain}.{$host}/estate_register");

    
   
    // for production
    // $domain = parse_url(config('app.url'), PHP_URL_HOST);

    // return redirect("https://{$tenant->subdomain}.{$domain}/estate_register");
    
}

    public function create(Request $request)
    {
        return view('auth.tenant_register');
    }

    public function newServiceAgreement(Request $request,$servicefile){

         $path = storage_path(
           "app/public/pdfs/{$servicefile}"
         );

         return response()->file($path,[
          'Content-Type' => 'application/pdf',
          'Content-Disposition' => 'inline; filename="' . basename($path) . '"'
         ]);
    }

}
