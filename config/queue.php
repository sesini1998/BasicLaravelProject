<?php

return [
    // Default queue connection to use.
    'default' => env('QUEUE_CONNECTION', 'sync'),

    'connections' => [
        'sync' => [
            'driver' => 'sync', // Synchronous (in-memory) queue driver.
        ],

        'database' => [
            'driver' => 'database', // Database queue driver.
            'table' => 'jobs', // Database table to store jobs.
            'queue' => 'default', // Default queue name.
            'retry_after' => 90, // Number of seconds to wait before retrying failed jobs.
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd', // Beanstalkd queue driver.
            'host' => 'localhost', // Beanstalkd server host.
            'queue' => 'default', // Default queue name.
            'retry_after' => 90, // Number of seconds to wait before retrying failed jobs.
            'block_for' => 0,
        ],

        'sqs' => [
            'driver' => 'sqs', // Amazon SQS queue driver.
            'key' => env('AWS_ACCESS_KEY_ID'), // AWS access key ID.
            'secret' => env('AWS_SECRET_ACCESS_KEY'), // AWS secret access key.
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'), // SQS URL prefix.
            'queue' => env('SQS_QUEUE', 'your-queue-name'), // SQS queue name.
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'), // AWS region.
        ],

        'redis' => [
            'driver' => 'redis', // Redis queue driver.
            'connection' => 'default', // Redis connection to use.
            'queue' => env('REDIS_QUEUE', 'default'), // Redis queue name.
            'retry_after' => 90, // Number of seconds to wait before retrying failed jobs.
            'block_for' => null,
        ],
    ],

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'), // Driver for storing failed jobs.
        'database' => env('DB_CONNECTION', 'mysql'), // Database connection for storing failed jobs.
        'table' => 'failed_jobs', // Database table to store failed jobs.
    ],
];
