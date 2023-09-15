<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    // This middleware class prevents requests from being processed during application maintenance mode.

    // Define exceptions for requests that should be allowed during maintenance.
    protected $except = [
        
    ];
}
