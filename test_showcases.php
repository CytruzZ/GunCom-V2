<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
$posts = \App\Models\Showcase::all();
foreach($posts as $p) {
    echo "ID: " . $p->id . " | Image: " . $p->image . PHP_EOL;
}
