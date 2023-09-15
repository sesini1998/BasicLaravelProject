<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    // This middleware handles authentication checks for routes and redirects unauthorized users to the login page.

    // Define the redirection logic for unauthenticated users.
    protected function redirectTo($request)
    {
        // Check if the request does not expect a JSON response.
        if (! $request->expectsJson()) {
            // Redirect the user to the login route.
            return route('login');
        }
    }
}
