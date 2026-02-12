<?php

use App\Models\PenempatanMagang;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$magangs = PenempatanMagang::all();

echo "Count: " . $magangs->count() . "\n";

foreach ($magangs as $m) {
    echo "Filesystem ID: " . $m->id . "\n";
    echo "Company: " . $m->company_name . "\n";
    echo "Student List Type: " . gettype($m->student_list) . "\n";
    print_r($m->student_list);
    echo "------------------------\n";
}
