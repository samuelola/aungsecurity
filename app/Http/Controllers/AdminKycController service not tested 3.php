<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminBioRequest;
use App\Http\Requests\DocRequest;
use App\Models\State;
use App\Models\Lga;
use App\Services\Newkyc\KycService;
use App\Services\Newkyc\OcrService;
use App\Services\Newkyc\FaceService;
use App\Services\Newkyc\ResidentIdService;
use App\Services\Storage\R2FileService;
use Illuminate\Http\Request;

class AdminKycController extends Controller
{
    public function __construct(
        private KycService $kycService,
        private OcrService $ocrService,
        private FaceService $faceService,
        private R2FileService $storage,
        private ResidentIdService $residentIdService
    ) {}

    public function index()
    {
        $user = auth()->user();
        $tenant = app('tenant');

        $kyc = $this->kycService->getUserKyc($user, $tenant);

        return view('dashboard.admin.kyc.kyc_verification', [
            'kyc' => $kyc,
            'user' => $user,
            'allStates' => State::all(),
            'lgas' => $kyc->state_id ? Lga::where('state_id', $kyc->state_id)->get() : [],
        ]);
    }

    public function storeBio(AdminBioRequest $request)
    {
        $user = auth()->user();
        $tenant = app('tenant');

        $kyc = $this->kycService->getUserKyc($user, $tenant);

        $kyc->resident_id = $this->residentIdService->generate($kyc, $tenant);

        $kyc = $this->kycService->markBioCompleted($kyc, $request->validated());

        $alreadyCompleted = $kyc->bio_completed;

        return response()->json([
            'success' => true,
            'resident_id' => $kyc->resident_id,
            'next' => 'doc',
            'already_completed' => $alreadyCompleted,
        ]);
    }

    public function storeDoc(DocRequest $request)
    {
        $user = auth()->user();
        $tenant = app('tenant');

        $kyc = $this->kycService->getUserKyc($user, $tenant);

        if (!$kyc->bio_completed) {
        return response()->json(['message' => 'Complete bio first'], 403);
       }


        if ($request->hasFile('id_document')) {
            $path = $this->storage->upload(
                "kyc_docs/tenant_{$tenant->id}",
                $request->file('id_document')
            );

            $kyc->id_document = $path;
        }

        $temp = $this->storage->toTemp($kyc->id_document);

        $text = $this->ocrService->extract($temp);

        unlink($temp);

        $name = $this->ocrService->extractName($text);
        $gender = $this->ocrService->extractGender($text);

        $docCompleted = $kyc->doc_completed;

        $kyc = $this->kycService->markDocCompleted($kyc, [
            'ocr_text' => $text,
            'ocr_name' => $name,
            'ocr_gender' => $gender,
        ]);

        return response()->json([
            'success' => true,
            'next' => 'face',
            'doc_already_completed' => $docCompleted
        ]);
    }

    public function compareFace(Request $request)
    {
        $user = auth()->user();
        $tenant = app('tenant');

        $kyc = $this->kycService->getUserKyc($user, $tenant);

        if (!$kyc->doc_completed) {
            return response()->json(['message' => 'Upload ID first'], 403);
        }

        $request->validate([
            'image' => 'required|string',
        ]);

        /*
        |-----------------------------
        | COMPARE USING SERVICE
        |-----------------------------
        */

        $confidence = $this->faceService->compareWithR2(
            $kyc->id_document,
            $request->image,
            fn ($path) => $this->storage->toTemp($path)
        );

        if ($confidence < 70) {
            return response()->json([
                'message' => 'Face does not match',
                'confidence' => $confidence
            ], 422);
        }

        /*
        |-----------------------------
        | SAVE RESULT
        |-----------------------------
        */

        $liveFacePath = "kyc_faces/tenant_" . $tenant->id . "/live_" . $user->id . ".jpg";

        $this->storage->put($liveFacePath, base64_decode(
            preg_replace('/^data:image\/\w+;base64,/', '', $request->image)
        ));

        $this->kycService->completeKyc($kyc, [
            'face_image' => $liveFacePath,
            'face_confidence' => $confidence,
            'face_verified' => true,
        ]);

        return response()->json([
            'success' => true,
            'confidence' => $confidence
        ]);
    }
}