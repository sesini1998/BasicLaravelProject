<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    // Exception classes listed here will not be reported.
    protected $dontReport = [
        .
    ];

    // List of fields not to flash in session for validation errors.
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    // Register custom exception handling logic here.
    public function register()
    {
       
    }
}
