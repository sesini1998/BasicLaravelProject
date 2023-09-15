<?php

return [
    // Broadcasting configuration for Laravel applications.

    'default' => env('BROADCAST_DRIVER', 'null'), // Default broadcasting driver.

    'connections' => [
        // Configuration for different broadcasting drivers.

        'pusher' => [
            'driver' => 'pusher', // Driver type for Pusher.
            'key' => env('PUSHER_APP_KEY'), // Pusher API key.
            'secret' => env('PUSHER_APP_SECRET'), // Pusher API secret.
            'app_id' => env('PUSHER_APP_ID'), // Pusher application ID.
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'), // Pusher cluster.
                'useTLS' => true, // Use TLS for secure communication.
            ],
        ],

        'redis' => [
            'driver' => 'redis', // Driver type for Redis.
            'connection' => 'default', // Redis connection to use.
        ],

        'log' => [
            'driver' => 'log', // Driver type for logging (useful for debugging).
        ],

        'null' => [
            'driver' => 'null', // Null driver (no broadcasting).
        ],
    ],
];
