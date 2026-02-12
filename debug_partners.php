<?php

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$partners = Partner::all();

echo "Symlink Target: " . readlink(public_path('storage')) . "\n";
echo "Storage Path: " . storage_path('app/public') . "\n";

foreach ($partners as $partner) {
    echo "ID: " . $partner->id . "\n";
    echo "Name: " . $partner->name . "\n";
    echo "Logo DB Path: " . $partner->logo . "\n";
    echo "Full Path: " . storage_path('app/public/' . $partner->logo) . "\n";
    echo "Exists: " . (file_exists(storage_path('app/public/' . $partner->logo)) ? 'YES' : 'NO') . "\n";
    echo "Public URL (generated): " . Storage::url($partner->logo) . "\n";
    echo "--------------------------------\n";
}
