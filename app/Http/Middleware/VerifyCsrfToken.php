<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    // This middleware class handles Cross-Site Request Forgery (CSRF) token verification.

    // Define routes that should be exempt from CSRF token verification.
    protected $except = [
        
    ];
}
