<?php

// Dynamically determine the public path
$public_path = dirname(__DIR__) . '/public';

// Set up Laravel application
require dirname(__DIR__) . '/bootstrap/app.php';

$app = require_once $public_path . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
