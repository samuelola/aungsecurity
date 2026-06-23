<?php 

namespace App\Services\Storage;

use Illuminate\Support\Facades\Storage;

class R2FileService
{
    public function upload(string $path, $file, string $disk = 'r2'): string
    {
        return Storage::disk($disk)->putFile($path, $file);
    }

    public function put(string $path, string $content): void
    {
        Storage::disk('r2')->put($path, $content);
    }

    public function get(string $path): string
    {
        return Storage::disk('r2')->get($path);
    }

    public function exists(string $path): bool
    {
        return Storage::disk('r2')->exists($path);
    }

    public function delete(string $path): void
    {
        Storage::disk('r2')->delete($path);
    }

    public function toTemp(string $r2Path): string
    {
        $temp = storage_path('app/temp_' . basename($r2Path));

        file_put_contents($temp, $this->get($r2Path));

        return $temp;
    }
}