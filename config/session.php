<?php

return [
    'driver' => env('SESSION_DRIVER', 'file'), // The session driver used (default is 'file').
    
    'lifetime' => env('SESSION_LIFETIME', 120), // The session lifetime in minutes (default is 120 minutes).
    
    'expire_on_close' => false, // Whether to expire the session on browser close (default is false).
    
    'encrypt' => false, // Whether to encrypt session data (default is false).
    
    'files' => storage_path('framework/sessions'), // Path to store session files.
    
    'connection' => env('SESSION_CONNECTION', null), // Database connection used for session management.
    
    'table' => 'sessions', // Name of the sessions table if using the database driver.
    
    'store' => env('SESSION_STORE', null), // The cache store used for session data.
    
    'lottery' => [2, 100], // Session ID lottery configuration (used for garbage collection).
    
    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ), // Name of the session cookie.
    
    'path' => '/', // The path for which the session cookie is available.
    
    'domain' => env('SESSION_DOMAIN', null), // The domain for which the session cookie is available.
    
    'secure' => env('SESSION_SECURE_COOKIE'), // Whether the session cookie should only be sent over secure connections.
    
    'http_only' => true, // Whether the session cookie should be HTTP only.
    
    'same_site' => 'lax', // SameSite attribute for session cookies.
];
