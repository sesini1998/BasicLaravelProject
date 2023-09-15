<?php

return [
    // Configuration for authentication and password reset in Laravel.

    'defaults' => [
        // Default authentication guard and password reset provider.
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        // Authentication guards configuration.
        'web' => [
            'driver' => 'session', // Authentication driver (e.g., session, token).
            'provider' => 'users', // User provider to use for authentication.
        ],

        'api' => [
            'driver' => 'token', // Authentication driver for API.
            'provider' => 'users', // User provider to use for API authentication.
            'hash' => false, // Whether to use hashing for API tokens.
        ],
    ],

    'providers' => [
        // User providers configuration.
        'users' => [
            'driver' => 'eloquent', // Driver for user authentication (e.g., eloquent).
            'model' => App\Models\User::class, // User model class to use for authentication.
        ],
    ],

    'passwords' => [
        // Password reset configuration.
        'users' => [
            'provider' => 'users', // User provider to use for password reset.
            'table' => 'password_resets', // Database table for password resets.
            'expire' => 60, // Expiration time for password reset tokens (in minutes).
            'throttle' => 60, // Throttle time between password reset requests (in seconds).
        ],
    ],

    'password_timeout' => 10800, // Password reset timeout (in seconds).
];
