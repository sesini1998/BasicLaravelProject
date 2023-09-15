<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    // This middleware checks user authentication and redirects if necessary.

    public function handle(Request $request, Closure $next)
    {
        // Check if the current request path is "login" and a user session exists.
        if ($request->path() == "login" && $request->session()->has('user')) {
            // Redirect to the homepage if the user is already authenticated.
            return redirect('/');
        }

        // If the conditions are not met, continue with the request.
        return $next($request);
    }
}
