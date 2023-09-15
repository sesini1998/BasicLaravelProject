<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    // This middleware checks if a user is authenticated and redirects them to the specified home page.

    public function handle($request, Closure $next, ...$guards)
    {
        // Determine which authentication guards to check.
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // Check if a user is authenticated for the specified guard.
            if (Auth::guard($guard)->check()) {
                // Redirect the authenticated user to the home page defined in RouteServiceProvider.
                return redirect(RouteServiceProvider::HOME);
            }
        }

        // If the user is not authenticated, continue with the request.
        return $next($request);
    }
}
