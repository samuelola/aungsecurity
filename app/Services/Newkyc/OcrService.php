<?php 

namespace App\Services\Newkyc;

use Illuminate\Support\Facades\Http;

class OcrService
{
    public function extract(string $imagePath): ?string
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

        return $response->json('ParsedResults.0.ParsedText');
    }

    public function extractName(string $text): ?string
    {
        preg_match('/Surname\s*:?\s*(.+)/i', $text, $s);
        preg_match('/First\s*Name\s*:?\s*(.+)/i', $text, $f);

        return trim(($f[1] ?? '') . ' ' . ($s[1] ?? '')) ?: null;
    }

    public function extractGender(string $text): ?string
    {
        $text = strtoupper($text);

        if (preg_match('/\b(GENDER|SEX)\b.*(MALE|FEMALE|M|F)/', $text, $m)) {
            return in_array($m[2], ['M','MALE']) ? 'male' : 'female';
        }

        if (str_contains($text, 'MALE')) return 'male';
        if (str_contains($text, 'FEMALE')) return 'female';

        return null;
    }
}