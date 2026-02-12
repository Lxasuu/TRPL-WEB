<?php

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$partners = Partner::all();

echo "Uploads Disk Root: " . config('filesystems.disks.uploads.root') . "\n";
echo "Uploads Disk URL: " . config('filesystems.disks.uploads.url') . "\n";

foreach ($partners as $partner) {
    echo "ID: " . $partner->id . "\n";
    echo "Name: " . $partner->name . "\n";
    echo "Logo DB Path: " . $partner->logo . "\n";
    
    // Check using the uploads disk
    $exists = Storage::disk('uploads')->exists($partner->logo);
    echo "Exists on 'uploads' disk: " . ($exists ? 'YES' : 'NO') . "\n";
    
    // Check manual path
    $manualPath = public_path('uploads/' . $partner->logo);
    echo "Manual Path Check: " . $manualPath . "\n";
    echo "Exists Manually: " . (file_exists($manualPath) ? 'YES' : 'NO') . "\n";

    // Generated URL
    echo "Generated URL: " . Storage::disk('uploads')->url($partner->logo) . "\n";
    echo "--------------------------------\n";
}
