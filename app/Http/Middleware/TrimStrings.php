<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    // This middleware class is responsible for trimming whitespace from incoming request data.

    // Define which fields should be exempt from string trimming.
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
