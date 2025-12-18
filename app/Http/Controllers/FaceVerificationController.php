<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FaceVerificationController extends Controller
{
     public function index()
    {
         $tenant = app('tenant');
        return view('dashboard.user.kyc.face_verification',compact('tenant'));
    }
    
    public function store(Request $request)
    {
        $user = auth()->user();

        $image = str_replace('data:image/jpeg;base64,', '', $request->image);
        $image = base64_decode($image);

        $path = "faces/{$user->id}.jpg";
        Storage::put($path, $image);

        $response = Http::asMultipart()->post(
            'https://api-us.faceplusplus.com/facepp/v3/detect',
            [
                'api_key'    => config('services.facepp.key'),
                'api_secret' => config('services.facepp.secret'),
                'image_base64' => base64_encode($image),
            ]
        );


        if (!$response->successful()) {
            return back()->withErrors(['face' => 'Face not detected']);
        }

        $user->update([
            'face_verified' => true,
            'face_image' => $path
        ]);

        return redirect()->route('tenant_user_dashboard');
    }
}
