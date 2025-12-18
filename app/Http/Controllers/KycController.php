<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\Kyc;
use App\Models\State;
use App\Http\Requests\BioRequest;


class KycController extends Controller
{
     public function index()
    {
         $tenant = app('tenant');
         $user = auth()->user();

         $kyc = Kyc::firstOrCreate([
            'user_id' => $user->id,
            'tenant_id' => $tenant->id,
         ]);

         $allStates = State::all();
         return view('dashboard.user.kyc.kyc_verification',compact('kyc', 'user','allStates'));
    }

    public function lgas(State $state)
    {
         return response()->json(
            $state->lgas()->select('id', 'name')->get()
        );
    }
    
    public function storeBio(BioRequest $request)
    {
        $tenant = app('tenant');
        $user = auth()->user();
        $kyc = Kyc::where('user_id', $user->id)
                ->where('tenant_id', $tenant->id)
                ->firstOrFail();

        $kyc->update([
            'phone' => $request->phone,
            'address' => $request->address,
            'lga_id' => $request->lga_id,
            'state_id' => $request->state_id,
            'bio_completed' => true,
        ]);

        return response()->json([
            'success' => true,
            'next' => 'doc',
        ]);
    }


    public function storeDoc(Request $request)
    {
        $tenant = app('tenant');
        $user = auth()->user();

        $kyc = Kyc::where('user_id', $user->id)
                ->where('tenant_id', $tenant->id)
                ->firstOrFail();

        if (!$kyc->bio_completed) {
            return response()->json(['message' => 'Complete bio first'], 403);
        }

        $request->validate([
            'id_type' => 'required|string',
            'id_document' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $path = $request->file('id_document')->store(
            "kyc_docs/tenant_{$tenant->id}"
        );

        $kyc->update([
            'id_type' => $request->id_type,
            'id_document' => $path,
            'doc_completed' => true,
            'kyc_completed' => true,
        ]);

        return response()->json([
            'success' => true,
            'redirect' => route('tenant_user_dashboard', $tenant->subdomain),
        ]);
    }


    
    
}
