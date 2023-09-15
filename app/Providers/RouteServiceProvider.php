<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    // Default home path for authenticated users.
    public const HOME = '/home';

    public function boot()
    {
        // Configure rate limiting for API requests.
        $this->configureRateLimiting();

        // Define routes for both API and web using the provided routes files.
        $this->routes(function () {
            // API routes configuration.
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            // Web routes configuration.
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    // Configure rate limiting for API requests.
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60); // Define rate limiting rules for the 'api' guard.
        });
    }
}
