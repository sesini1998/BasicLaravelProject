<?php

use Illuminate\Foundation\Inspiring; // Import the Inspiring class
use Illuminate\Support\Facades\Artisan; // Import the Artisan facade

// Define an Artisan command named 'inspire'
Artisan::command('inspire', function () {
    // Inside the command callback function, display an inspiring quote using the 'comment' method
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
