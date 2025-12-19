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

        $kyc->update([
            'phone' => $request->phone,
            'address' => $request->address,
            'lga_id' => $request->lga_id,
            'state_id' => $request->state_id,
            'current_step' => 'document',
            'bio_completed' => true,
        ]);

        return response()->json([
            'success' => true,
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
            'current_step' => 'completed',
        ]);

        return response()->json([
            'success' => true,
            'redirect' => route('tenant_user_dashboard', $tenant->subdomain),
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
            return response()->json(['message' => 'Upload ID first'], 403);
        }

        $request->validate([
            'image' => 'required|string',
        ]);

        // Save live face
        $imageData = preg_replace('/^data:image\/\w+;base64,/', '', $request->image);
        $imageData = base64_decode($imageData);

        $liveFacePath = "kyc_faces/tenant_{$tenant->id}/live_{$user->id}.jpg";
        Storage::put($liveFacePath, $imageData);

        // Face++ Compare
        $response = Http::asMultipart()->post(
            config('services.facepp.compare'),
            [
                ['name' => 'api_key', 'contents' => config('services.facepp.key')],
                ['name' => 'api_secret', 'contents' => config('services.facepp.secret')],
                [
                    'name' => 'image_file1',
                    'contents' => Storage::get($kyc->id_document),
                    'filename' => 'id.jpg'
                ],
                [
                    'name' => 'image_file2',
                    'contents' => Storage::get($liveFacePath),
                    'filename' => 'live.jpg'
                ],
            ]
        );

        if (!$response->successful()) {
            return response()->json(['message' => 'Face comparison failed'], 422);
        }

        $result = $response->json();

        if (!isset($result['confidence'])) {
            return response()->json(['message' => 'No face match result'], 422);
        }

        $confidence = $result['confidence'];

        // 🔒 Threshold
        if ($confidence < 80) {
            return response()->json([
                'message' => 'Face does not match ID',
                'confidence' => $confidence,
            ], 422);
        }

        // ✅ Verified
        $kyc->update([
            'face_image' => $liveFacePath,
            'face_confidence' => $confidence,
            'face_verified' => true,
            'face_completed' => true,
            'kyc_completed' => true,
            'current_step' => 'completed',
        ]);

        return response()->json([
            'success' => true,
            'confidence' => $confidence,
        ]);
    }   

}
