<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\Kyc;
use App\Models\State;
use App\Models\Lga;
use App\Http\Requests\AdminBioRequest;
use App\Http\Requests\DocRequest;
use App\Models\Tenant;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Google\Cloud\Vision\V1\ImageAnnotatorClient;
//use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Feature;
use Google\Cloud\Vision\V1\AnnotateImageRequest;
use Google\Cloud\Vision\V1\BatchAnnotateImagesRequest;



class AdminKycController extends Controller
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

        return view('dashboard.admin.kyc.kyc_verification', compact(
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
    
    
    public function storeBio(AdminBioRequest $request)
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

        // Reset face image if new doc uploaded
        if ($kyc->face_image && Storage::disk('public')->exists($kyc->face_image)) {
            Storage::disk('public')->delete($kyc->face_image);
        }

        $kyc->face_image = null;
    }

    

    /*
    |--------------------------------------------------------------------------
    | OCR TEXT EXTRACTION
    |--------------------------------------------------------------------------
    */
    $fullPath = Storage::disk('public')->path($path);

    $ocrText = $this->extractDocumentText($fullPath);

    \Log::info($ocrText);

    if (!$ocrText) {
        return response()->json([
            'message' => 'Unable to read document text. Try a clearer image.'
        ], 422);
    }

    /*
    |--------------------------------------------------------------------------
    | EXTRACT STRUCTURED DATA
    |--------------------------------------------------------------------------
    */
    $ocrName = $this->extractNameFromOCR($ocrText);
    $ocrGender = $this->extractGenderFromOCR($ocrText);

    /*
    |--------------------------------------------------------------------------
    | NORMALIZE USER DATA
    |--------------------------------------------------------------------------
    */
    $accountName = strtoupper(trim($user->first_name . ' ' . $user->last_name));
    $accountGender = strtolower($kyc->gender ?? '');

    /*
    |--------------------------------------------------------------------------
    | NAME VALIDATION
    |--------------------------------------------------------------------------
    */
    if ($ocrName) {

        $ocrParts = $this->normalizeName($ocrName);
        $accountParts = $this->normalizeName($accountName);

        $intersection = array_intersect($ocrParts, $accountParts);

        $score = (count($intersection) / max(count($accountParts), 1)) * 100;

        if ($score < 80) {
            return response()->json([
                'message' => "Document Names ". $ocrName. " does not match Kyc names: ". $accountName. " provided",
                'ocr_name' => $ocrName,
                'account_name' => $accountName,
                'match_score' => round($score, 2)
            ], 422);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | GENDER VALIDATION
    |--------------------------------------------------------------------------
    */

    $ocrGender = $this->normalizeGender($ocrGender);
    $accountGender = $this->normalizeGender($accountGender);

    if ($ocrGender && $accountGender && $ocrGender !== $accountGender) {

        return response()->json([
            'message' => "Document gender: ".$ocrGender. " does not match Kyc gender: ".$accountGender. " provided" ,
            'ocr_gender' => $ocrGender,
            'profile_gender' => $accountGender
        ], 422);
    }

   



    /*
    |--------------------------------------------------------------------------
    | SAVE OCR DATA (PRODUCTION SAFE)
    |--------------------------------------------------------------------------
    */

    $docCompleted = $kyc->doc_completed;

    $kyc->update([
        'ocr_name' => $ocrName,
        'ocr_gender' => $ocrGender,
        'ocr_text' => $ocrText,
        'ocr_verified' => true,
        'id_type' => $request->id_type,
        'id_document' => $path,
        'doc_completed' => true,
        'current_step' => 'face',
    ]);

    return response()->json([
        'success' => true,
        'next' => 'face',
        'ocr_name' => $ocrName,
        'ocr_gender' => $ocrGender,
        'doc_already_completed' => $docCompleted
    ]);
}



    private function normalizeName($name)
    {
        $name = strtoupper($name);
        $name = preg_replace('/[^A-Z ]/', '', $name);
        $parts = array_filter(explode(' ', $name));

        sort($parts); // ignore order differences
        return $parts;
    }

    private function normalizeGender($gender)
    {
        $gender = strtoupper(trim($gender));

        return match ($gender) {
            'M', 'MALE' => 'male',
            'F', 'FEMALE' => 'female',
            default => null,
        };
    }

    
    private function extractDocumentText(string $imagePath): ?string
    {


         $response = Http::asForm()->post('https://api.ocr.space/parse/image', [
                'apikey' => config('services.ocrspace.key'),
                'language' => 'eng',
                'isOverlayRequired' => 'false',
                'detectOrientation' => 'true',
                'scale' => 'true',
                'OCREngine' => 2,
                'base64Image' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents($imagePath)),
            ]);
            
            $result = $response->json();

            return $result['ParsedResults'][0]['ParsedText'] ?? null;

        // try {
        

            

        // } catch (\Exception $e) {

        //     \Log::error('OCR.Space Error', [
        //         'error' => $e->getMessage()
        //     ]);

        //     return null;
        // }
    }


    private function extractNameFromOCR(string $text): ?string
{
    $surname = null;
    $firstName = null;
    // $middleName = null;

    preg_match('/Surname\s*:?\s*(.+)/i', $text, $surnameMatch);
    preg_match('/First\s*Name\s*:?\s*(.+)/i', $text, $firstNameMatch);
    // preg_match('/Middle\s*Name\s*:?\s*(.+)/i', $text, $middleNameMatch);

    $surname = isset($surnameMatch[1]) ? trim(explode("\n", $surnameMatch[1])[0]) : null;
    $firstName = isset($firstNameMatch[1]) ? trim(explode("\n", $firstNameMatch[1])[0]) : null;
    // $middleName = isset($middleNameMatch[1]) ? trim(explode("\n", $middleNameMatch[1])[0]) : null;

    $name = implode(' ', array_filter([
        $firstName,
        // $middleName,
        $surname,
    ]));

    return $name ?: null;
}

    private function extractGenderFromOCR(string $text): ?string
    {
        $text = strtoupper($text);

        if (preg_match('/\b(GENDER|SEX)\b\s*[:\-]?\s*(MALE|FEMALE|M|F)\b/', $text, $m)) {

            return match ($m[2]) {
                'M', 'MALE' => 'male',
                'F', 'FEMALE' => 'female',
                default => null,
            };
        }

        // fallback (sometimes standalone)
        if (preg_match('/\b(MALE|FEMALE)\b/', $text, $m)) {
            return strtolower($m[1]);
        }

        if (preg_match('/\bM\b/', $text)) return 'male';
        if (preg_match('/\bF\b/', $text)) return 'female';

        return null;
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



public function regenerateEmergencyPin(Request $request)
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


public function regenerateEmergencyVisitorPin(Request $request)
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
