<?php

return [
    // Password hashing configuration for Laravel.

    'driver' => 'bcrypt', // Default password hashing driver (bcrypt or argon).

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10), // Number of bcrypt rounds (can be configured via environment variables).
    ],

    'argon' => [
        'memory' => 1024, // Argon2 memory cost (for the argon password hashing algorithm).
        'threads' => 2,   // Argon2 threads (for the argon password hashing algorithm).
        'time' => 2,      // Argon2 time cost (for the argon password hashing algorithm).
    ],
];
