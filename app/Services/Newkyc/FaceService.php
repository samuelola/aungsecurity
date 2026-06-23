<?php

namespace App\Services\Newkyc;

use Illuminate\Support\Facades\Http;

class FaceService
{
    public function detect(string $imagePath)
    {
        return Http::attach('image_file', fopen($imagePath, 'r'), 'id.jpg')
            ->post(config('services.facepp.detect'), [
                'api_key' => config('services.facepp.key'),
                'api_secret' => config('services.facepp.secret'),
            ])->json();
    }

    public function compare(string $face1, string $face2): float
    {
        $res = Http::attach('image_file1', fopen($face1, 'r'), 'a.jpg')
            ->attach('image_file2', fopen($face2, 'r'), 'b.jpg')
            ->post(config('services.facepp.compare'), [
                'api_key' => config('services.facepp.key'),
                'api_secret' => config('services.facepp.secret'),
            ])->json();

        return $res['confidence'] ?? 0;
    }

    /**
     * FULL R2-AWARE FLOW
     */
    public function compareWithR2(string $idImageR2Path, string $liveImageBase64, callable $r2Downloader): float
    {
        // 1. download ID image from R2
        $idTemp = $r2Downloader($idImageR2Path);

        // 2. decode live image
        $liveData = preg_replace('/^data:image\/\w+;base64,/', '', $liveImageBase64);
        $liveBinary = base64_decode($liveData);

        $liveTemp = storage_path('app/live_' . uniqid() . '.jpg');
        file_put_contents($liveTemp, $liveBinary);

        // 3. Face++ compare
        $result = Http::attach('image_file1', fopen($idTemp, 'r'), 'id.jpg')
            ->attach('image_file2', fopen($liveTemp, 'r'), 'live.jpg')
            ->post(config('services.facepp.compare'), [
                'api_key' => config('services.facepp.key'),
                'api_secret' => config('services.facepp.secret'),
            ])->json();

        // 4. cleanup
        @unlink($idTemp);
        @unlink($liveTemp);

        return $result['confidence'] ?? 0;
    }
}