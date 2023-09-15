<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    // Define the policies for your application models here.
    protected $policies = [
        
    ];

    public function boot()
    {
        // Register the defined policies with Laravel's Gate service.
        $this->registerPolicies();
    }
}
