<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    // This middleware class handles the encryption of cookies.

    // Define which cookies should be excluded from encryption.
    protected $except = [
       
    ];
}
