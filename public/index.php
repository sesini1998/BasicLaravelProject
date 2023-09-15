<?php

// Define the start time for measuring script execution time.
define('LARAVEL_START', microtime(true));

// Check if a maintenance file exists and require it if found.
if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

// Require the Composer autoload file, which loads Composer dependencies.
require __DIR__.'/../vendor/autoload.php';

// Require the Laravel application bootstrap file.
$app = require_once __DIR__.'/../bootstrap/app.php';

// Create an instance of the Laravel HTTP Kernel.
$kernel = $app->make(Kernel::class);

// Capture the incoming HTTP request.
$request = Request::capture();

// Handle the HTTP request using the Kernel and get the response.
$response = tap($kernel->handle($request))->send();

// Terminate the application, performing any necessary cleanup.
$kernel->terminate($request, $response);
