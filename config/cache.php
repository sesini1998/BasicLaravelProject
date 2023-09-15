<?php

return [
    // Configuration for caching in Laravel applications.

    'default' => env('CACHE_DRIVER', 'file'), // Default caching driver.

    'stores' => [
        // Configuration for different caching stores.

        'apc' => [
            'driver' => 'apc', // APC caching driver.
        ],

        'array' => [
            'driver' => 'array', // Array-based caching driver.
            'serialize' => false, // Whether to serialize cached data.
        ],

        'database' => [
            'driver' => 'database', // Database-based caching driver.
            'table' => 'cache', // Database table to store cache data.
            'connection' => null, // Database connection to use.
        ],

        'file' => [
            'driver' => 'file', // File-based caching driver.
            'path' => storage_path('framework/cache/data'), // Path to store cache files.
        ],

        'memcached' => [
            'driver' => 'memcached', // Memcached caching driver.
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'), // Memcached persistent ID.
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ], // SASL authentication credentials.
            'options' => [
                // Memcached options (e.g., connection timeout).
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ], // Memcached server configurations.
        ],

        'redis' => [
            'driver' => 'redis', // Redis caching driver.
            'connection' => 'cache', // Redis connection to use.
        ],

        'dynamodb' => [
            'driver' => 'dynamodb', // DynamoDB caching driver (AWS DynamoDB).
            'key' => env('AWS_ACCESS_KEY_ID'), // AWS access key ID.
            'secret' => env('AWS_SECRET_ACCESS_KEY'), // AWS secret access key.
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'), // AWS region.
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'), // DynamoDB table for caching.
            'endpoint' => env('DYNAMODB_ENDPOINT'), // DynamoDB endpoint (optional).
        ],
    ],

    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache'), // Cache key prefix.
];
