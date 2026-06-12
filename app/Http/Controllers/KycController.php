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
use Intervention\Image\Laravel\Facades\Image;
use App\Notifications\NewMessageNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
        
        $alreadyCompleted = $kyc->bio_completed;

        // $old = $kyc->getOriginal();
        


        try {

            $kyc->update([
                'phone' => $request->phone,
                'address' => $request->address,
                'lga_id' => $request->lga_id,
                'state_id' => $request->state_id,
                'occupants' => $request->occupants,
                'flat_number' => $request->flat_number,
                'agent_name' => $request->agent_name,
                'agent_number' => $request->agent_number,
                'gender' => $request->gender,
                'current_step' => 'document',
                'bio_completed' => true,
                
            ]);

            // AuditService::log(
            //     'updated',
            //     $kyc,
            //     $old,
            //     $kyc->fresh()->toArray()
            // );

        } catch (\Illuminate\Database\QueryException $e) {

            if ($e->getCode() == 23000) {

                return response()->json([
                    'message' => 'Phone number already exists.'
                ], 422);
            }

            return response()->json([
                'message' => 'Something went wrong.'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'resident_id' => $kyc->resident_id,
            'next' => 'doc',
            'already_completed' => $alreadyCompleted,
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

        // $request->validate([
        //     'id_type' => 'required|string',
        //     'id_document' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        // ]);

        

        $path = $kyc->id_document;

        if ($request->hasFile('id_document')) {

            // Delete old document
            if ($kyc->id_document && Storage::disk('public')->exists($kyc->id_document)) {
                Storage::disk('public')->delete($kyc->id_document);
            }

            // Store new document
            $path = $request->file('id_document')->store(
                "kyc_docs/tenant_{$tenant->id}",
                'public'
            );

            // Reset face verification only when new doc uploaded
            if ($kyc->face_image && Storage::disk('public')->exists($kyc->face_image)) {
                Storage::disk('public')->delete($kyc->face_image);
            }

            $kyc->face_image = null;
        }

        $docCompleted = $kyc->doc_completed;
        
        $kyc->update([
            'id_type' => $request->id_type,
            'id_document' => $path,
            'doc_completed' => true,
            // 'kyc_completed' => true,
            'current_step' => 'face',
        ]);

        

        return response()->json([
            'success' => true,
            'next' => 'face',
            'doc_already_completed' => $docCompleted
            
        ]);
    }


 
    public function compareFace(Request $request)
{
    $tenant = app('tenant');
    $user = auth()->user();

    $kyc = Kyc::where('user_id', $user->id)
        ->where('tenant_id', $tenant->id)
        ->firstOrFail();

    if (!$kyc->doc_completed) {
        return response()->json([
            'message' => 'Upload ID first'
        ], 403);
    }

    $request->validate([
        'image' => 'required|string',
    ]);

    /*
    |--------------------------------------------------------------------------
    | SAVE LIVE SELFIE
    |--------------------------------------------------------------------------
    */

    $imageData = preg_replace('/^data:image\/\w+;base64,/', '', $request->image);
    $imageData = base64_decode($imageData);

    $liveFacePath = "kyc_faces/tenant_{$tenant->id}/live_{$user->id}.jpg";

    Storage::disk('public')->put($liveFacePath, $imageData);

    $liveFullPath = Storage::disk('public')->path($liveFacePath);

    /*
    |--------------------------------------------------------------------------
    | GET ORIGINAL ID IMAGE
    |--------------------------------------------------------------------------
    */

    $idImagePath = Storage::disk('public')->path($kyc->id_document);

    if (!file_exists($idImagePath)) {
        return response()->json([
            'message' => 'ID document not found'
        ], 422);
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 1: RESIZE + COMPRESS ID IMAGE
    |--------------------------------------------------------------------------
    */

    $compressedPath = storage_path(
        "app/public/temp_id_{$user->id}.jpg"
    );

    try {

        $image = Image::read($idImagePath);

        /*
        |--------------------------------------------------------------------------
        | Resize if too large
        |--------------------------------------------------------------------------
        */

        if ($image->width() > 1200) {
            $image->scaleDown(width: 1200);
        }

        /*
        |--------------------------------------------------------------------------
        | Save compressed image
        |--------------------------------------------------------------------------
        */

        $image->save($compressedPath, quality: 80);

    } catch (\Exception $e) {

        return response()->json([
            'message' => 'Unable to process ID image',
            'error' => $e->getMessage()
        ], 422);
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 2: DETECT FACE ON ID CARD
    |--------------------------------------------------------------------------
    */

    $detectResponse = Http::withoutVerifying()
        ->attach(
            'image_file',
            fopen($compressedPath, 'r'),
            'id.jpg'
        )
        ->post(config('services.facepp.detect'), [
            'api_key' => config('services.facepp.key'),
            'api_secret' => config('services.facepp.secret'),
            'return_landmark' => 0,
        ]);

    if (!$detectResponse->successful()) {

        @unlink($compressedPath);

        return response()->json([
            'message' => 'Face detection failed on ID card',
            'error' => $detectResponse->body()
        ], 422);
    }

    $detectResult = $detectResponse->json();

    if (
        !isset($detectResult['faces']) ||
        empty($detectResult['faces'])
    ) {

        @unlink($compressedPath);

        return response()->json([
            'message' => 'No face detected on ID card'
        ], 422);
    }

    /*
    |--------------------------------------------------------------------------
    | GET FACE RECTANGLE
    |--------------------------------------------------------------------------
    */

    $face = $detectResult['faces'][0]['face_rectangle'];

    // $top = $face['top'];
    // $left = $face['left'];
    // $width = $face['width'];
    // $height = $face['height'];

    $padding = 25; // adjust 15–40 depending on ID quality

    $top = max(0, $face['top'] - $padding);
    $left = max(0, $face['left'] - $padding);

    $width = $face['width'] + ($padding * 2);
    $height = $face['height'] + ($padding * 2);

    

    /*
    |--------------------------------------------------------------------------
    | STEP 3: CROP FACE FROM ID
    |--------------------------------------------------------------------------
    */

    $croppedPath = "kyc_faces/tenant_{$tenant->id}/cropped_id_{$user->id}.jpg";

    $croppedFullPath = Storage::disk('public')->path($croppedPath);

    try {

        $cropImage = Image::read($compressedPath);

        $cropImage->crop(
            $width,
            $height,
            $left,
            $top
        );

        /*
        |--------------------------------------------------------------------------
        | Optional upscale for better comparison
        |--------------------------------------------------------------------------
        */

        if ($cropImage->width() < 200) {
            $cropImage->resize(200, 200);
        }

        $cropImage->save($croppedFullPath, quality: 90);

    } catch (\Exception $e) {

        @unlink($compressedPath);

        return response()->json([
            'message' => 'Unable to crop face from ID',
            'error' => $e->getMessage()
        ], 422);
    }

    /*
    |--------------------------------------------------------------------------
    | STEP 4: COMPARE FACES
    |--------------------------------------------------------------------------
    */

    $compareResponse = Http::withoutVerifying()
        ->attach(
            'image_file1',
            fopen($croppedFullPath, 'r'),
            'cropped.jpg'
        )
        ->attach(
            'image_file2',
            fopen($liveFullPath, 'r'),
            'live.jpg'
        )
        ->post(config('services.facepp.compare'), [
            'api_key' => config('services.facepp.key'),
            'api_secret' => config('services.facepp.secret'),
        ]);

    if (!$compareResponse->successful()) {

        @unlink($compressedPath);

        return response()->json([
            'message' => 'Face comparison failed',
            'error' => $compareResponse->body()
        ], 422);
    }

    $result = $compareResponse->json();

    if (!isset($result['confidence'])) {

        @unlink($compressedPath);

        return response()->json([
            'message' => 'Unable to compare faces'
        ], 422);
    }

    $confidence = $result['confidence'];

    /*
    |--------------------------------------------------------------------------
    | STEP 5: VERIFY CONFIDENCE
    |--------------------------------------------------------------------------
    */

    if ($confidence < 70) {

        @unlink($compressedPath);

        return response()->json([
            'message' => 'Face does not match ID',
            'confidence' => $confidence
        ], 422);
    }

    /*
    |--------------------------------------------------------------------------
    | SUCCESS
    |--------------------------------------------------------------------------
    */

    @unlink($compressedPath);

    $plainPin = random_int(100000, 999999);
    $vistorEmergencyPin = random_int(100000, 999999);

    $kyc->update([
        'face_image'      => $liveFacePath,
        'face_confidence' => $confidence,
        'face_verified'   => true,
        'face_completed'  => true,
        'kyc_completed'   => true,
        'emergency_pin' => $plainPin,
        'emergency_pin_used_at' => now(),
        'emergency_visitor_pin' => $vistorEmergencyPin,
        'current_step'    => 'completed',
    ]);

    
    $user->notify(
        new NewMessageNotification(
            'KYC Successful',
            "Your KYC  is successful"
        )
    );

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


public function regenerateResidentEmergencyPin(Request $request)
{
    $tenant = app('tenant');
    $user = auth()->user();

    $kyc = Kyc::where('user_id', $user->id)
        ->where('tenant_id', $tenant->id)
        ->firstOrFail();

    // Generate new secure pin
    $newPin = random_int(100000, 999999);

    $kyc->update([
        'emergency_pin' => $newPin
    ]);

    return response()->json([
        'success' => true,
        'emergency_pin' => $newPin
    ]);
}


public function regenerateResidentEmergencyVisitorPin(Request $request)
{
    $tenant = app('tenant');
    $user = auth()->user();

    $kyc = Kyc::where('user_id', $user->id)
        ->where('tenant_id', $tenant->id)
        ->firstOrFail();

    // Generate new secure pin
    $newPin = random_int(100000, 999999);

    $kyc->update([
        'emergency_visitor_pin' => $newPin
    ]);

    return response()->json([
        'success' => true,
        'emergency_visitor_pin' => $newPin
    ]);
}




}
