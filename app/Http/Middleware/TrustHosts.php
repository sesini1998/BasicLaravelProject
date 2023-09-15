<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    // This middleware class is responsible for trusting specified host configurations.

    // Define the trusted hosts for the application.
    public function hosts()
    {
        // Return an array of trusted hosts, typically including the application's main domain and subdomains.
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
