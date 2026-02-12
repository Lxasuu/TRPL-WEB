<?php

use Illuminate\Support\Facades\Storage;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Simulate a request context if needed, but asset() usually uses APP_URL from env if no request
// forcing URL generation to check config

echo "Uploads Disk URL (Config): " . config('filesystems.disks.uploads.url') . "\n";
echo "Storage::disk('uploads')->url('test.png'): " . Storage::disk('uploads')->url('test.png') . "\n";
echo "asset('uploads/test.png'): " . asset('uploads/test.png') . "\n";

echo "\n--- Expected Behavior ---\n";
echo "Storage URL should be: /uploads/test.png\n";
echo "Asset URL should be: http://localhost:8000/uploads/test.png (or whatever APP_URL is)\n";
