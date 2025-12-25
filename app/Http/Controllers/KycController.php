<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\Kyc;
use App\Models\State;
use App\Models\Lga;
use App\Http\Requests\BioRequest;
use App\Http\Requests\DocRequest;
use App\Models\Tenant;


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

        // Load LGAs if state already selected (for reloads)
        $lgas = [];
        if ($kyc->state_id) {
            $lgas = Lga::where('state_id', $kyc->state_id)->get();
        }

        return view('dashboard.user.kyc.kyc_verification', compact(
            'kyc',
            'user',
            'allStates',
            'lgas'
        ));
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
        $subdomain_name = Tenant::where('subdomain',$tenant->subdomain)->first();        

        //Generate Digital Residency ID only if not exists
        if (!$kyc->resident_id) {

            $tenantPrefix = strtoupper(str_replace(' ', '', $subdomain_name->subdomain));

            // Get last ID number for this tenant
            $lastId = Kyc::where('tenant_id', $tenant->id)
                ->whereNotNull('resident_id')
                ->orderBy('id', 'desc')
                ->value('resident_id');

            $number = 1;

            if ($lastId) {
                $number = (int) substr($lastId, strrpos($lastId, '-') + 1) + 1;
            }

            $rr = '-ESTATE';
            $residentId = $tenantPrefix . $rr. '-' . str_pad($number, 6, '0', STR_PAD_LEFT);

            $kyc->resident_id = $residentId;
        }        

        $kyc->update([
            'phone' => $request->phone,
            'address' => $request->address,
            'lga_id' => $request->lga_id,
            'state_id' => $request->state_id,
            'occupants' => $request->occupants,
            'current_step' => 'document',
            'bio_completed' => true,
        ]);

        return response()->json([
            'success' => true,
            'resident_id' => $kyc->resident_id,
            'next' => 'doc',
        ]);
    }

    


    public function storeDoc(DocRequest $request)
    {
        $tenant = app('tenant');
        $user = auth()->user();

        $kyc = Kyc::where('user_id', $user->id)
                ->where('tenant_id', $tenant->id)
                ->firstOrFail();

        if (!$kyc->bio_completed) {
            return response()->json(['message' => 'Complete bio first'], 403);
        }

        //face ++ does not support pdf

        $request->validate([
            'id_type' => 'required|string',
            'id_document' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);



        /* ===========================
           DELETE OLD DOCUMENT (IF ANY)
         ============================ */
        if ($kyc->id_document && Storage::disk('public')->exists($kyc->id_document)) {
            Storage::disk('public')->delete($kyc->id_document);
        }

        /* ===========================
          STORE NEW DOCUMENT
        ============================ */
        $path = $request->file('id_document')->store(
            "kyc_docs/tenant_{$tenant->id}",
            'public'
        );

        /* ===========================
          RESET FACE VERIFICATION
         (IMPORTANT when re-uploading)
        ============================ */
        if ($kyc->face_image && Storage::disk('public')->exists($kyc->face_image)) {
            Storage::disk('public')->delete($kyc->face_image);
        }


        

        $kyc->update([
            'id_type' => $request->id_type,
            'id_document' => $path,
            'doc_completed' => true,
            'kyc_completed' => true,
            'current_step' => 'face',
        ]);

        return response()->json([
            'success' => true,
            'next' => 'face',
        ]);
    }


    public function compareFace(Request $request) {
    $tenant = app('tenant');
    $user = auth()->user();

    $kyc = Kyc::where('user_id', $user->id)
        ->where('tenant_id', $tenant->id)
        ->firstOrFail();

    if (!$kyc->doc_completed) {
        return response()->json(['message' => 'Upload ID first'], 403);
    }

    $request->validate([
        'image' => 'required|string',
    ]);

    /* ===========================
       SAVE LIVE FACE IMAGE
    ============================ */
    $imageData = preg_replace('/^data:image\/\w+;base64,/', '', $request->image);
    $imageData = base64_decode($imageData);

    $liveFacePath = "kyc_faces/tenant_{$tenant->id}/live_{$user->id}.jpg";
    Storage::disk('public')->put($liveFacePath, $imageData);

    /* ===========================
       DEFINE BOTH IMAGE PATHS
    ============================ */
    $image1Path = Storage::disk('public')->path($kyc->id_document); // ID document
    $image2Path = Storage::disk('public')->path($liveFacePath);     // Live face

    if (
    !Storage::disk('public')->exists($kyc->id_document) ||
    !Storage::disk('public')->exists($liveFacePath)
) {
    return response()->json([
        'message' => 'Image files not found',
        'doc_exists' => Storage::disk('public ')->exists($kyc->id_document),
        'face_exists' => Storage::disk('public')->exists($liveFacePath),
    ], 422);
}


    /* ===========================
       FACE++ COMPARE
    ============================ */
    $response = Http::withoutVerifying()
    ->attach('image_file1', fopen($image1Path, 'r'))
    ->attach('image_file2', fopen($image2Path, 'r'))
    ->post(config('services.facepp.compare'), [
        'api_key' => config('services.facepp.key'),
        'api_secret' => config('services.facepp.secret'),
    ]);


    if (!$response->successful()) {
        Storage::delete($liveFacePath);
        return response()->json([
            'message' => 'Face comparison failed',
            'error' => $response->body()
        ], 422);
    }

    $result = $response->json();

    if (!isset($result['confidence'])) {
        return response()->json(['message' => 'No face detected'], 422);
    }

    $confidence = $result['confidence'];


    /* ===========================
       VERIFY CONFIDENCE
    ============================ */
    if ($confidence < 80) {
        return response()->json([
            'message' => 'Face does not match ID',
            'confidence' => $confidence,
        ], 422);
    }

    /* ===========================
       SUCCESS → UPDATE KYC
    ============================ */
    $kyc->update([
        'face_image'      => $liveFacePath,
        'face_confidence' => $confidence,
        'face_verified'   => true,
        'face_completed'  => true,
        'kyc_completed'   => true,
        'current_step'    => 'completed',
    ]);

        return response()->json([
            'success' => true,
            'confidence' => $confidence,
        ]);
    }
    

    // KycController.php
    public function documentPreview(Request $request)
{
    $user = auth()->user();
    $tenant = app('tenant');

    $kyc = Kyc::where('user_id', $user->id)
              ->where('tenant_id', $tenant->id)
              ->firstOrFail();

    $path = $kyc->id_document;

    if (!$path || !Storage::exists($path)) {
        abort(404);
    }

    $fullPath = storage_path("app/$path");
    $mime = Storage::mimeType($path);

    return response()->file($fullPath, [
        'Content-Type' => $mime,
    ]);
}





}
