<?php

namespace Tests; // Namespace declaration for the Tests directory

use Illuminate\Contracts\Console\Kernel; // Import the Kernel interface

trait CreatesApplication // Define a trait named CreatesApplication
{
    public function createApplication() // Define a method named createApplication
    {
        $app = require __DIR__.'/../bootstrap/app.php'; // Create an instance of the Laravel application by including the app.php file

        $app->make(Kernel::class)->bootstrap(); // Bootstrap the application by making an instance of the Kernel and calling the bootstrap method

        return $app; // Return the initialized Laravel application instance
    }
}
