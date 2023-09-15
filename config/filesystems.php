<?php

return [
    // Configuration for Laravel's filesystem settings.

    'default' => env('FILESYSTEM_DRIVER', 'local'), // Default filesystem driver.

    'cloud' => env('FILESYSTEM_CLOUD', 's3'), // Cloud-based filesystem driver.

    'disks' => [
        // Configuration for various filesystem disks (e.g., local, public, S3).

        'local' => [
            'driver' => 'local', // Local filesystem driver.
            'root' => storage_path('app'), // Root directory for the local filesystem.
        ],

        'public' => [
            'driver' => 'local', // Local filesystem driver for public files.
            'root' => storage_path('app/public'), // Root directory for public files.
            'url' => env('APP_URL').'/storage', // URL prefix for accessing public files.
            'visibility' => 'public', // Visibility setting for public files.
        ],

        's3' => [
            'driver' => 's3', // Amazon S3 filesystem driver.
            'key' => env('AWS_ACCESS_KEY_ID'), // AWS access key ID.
            'secret' => env('AWS_SECRET_ACCESS_KEY'), // AWS secret access key.
            'region' => env('AWS_DEFAULT_REGION'), // AWS region.
            'bucket' => env('AWS_BUCKET'), // AWS S3 bucket name.
            'url' => env('AWS_URL'), // Custom AWS S3 URL (optional).
            'endpoint' => env('AWS_ENDPOINT'), // Custom AWS endpoint URL (optional).
        ],

        // Additional filesystem disks can be configured here.

    ],

    'links' => [
        // Symlinks for linking storage and public directories.

        public_path('storage') => storage_path('app/public'), // Symlink public storage directory.
    ],

];
