<?php

return [
    // Database configuration for Laravel applications.

    'default' => env('DB_CONNECTION', 'mysql'), // Default database connection.

    'connections' => [
        // Configuration for different database connections (e.g., MySQL, PostgreSQL, SQLite).

        'sqlite' => [
            'driver' => 'sqlite', // SQLite database driver.
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')), // SQLite database file path.
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true), // Enable foreign key constraints.
        ],

        'mysql' => [
            'driver' => 'mysql', // MySQL database driver.
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'), // MySQL host.
            'port' => env('DB_PORT', '3306'), // MySQL port.
            'database' => env('DB_DATABASE', 'forge'), // MySQL database name.
            'username' => env('DB_USERNAME', 'forge'), // MySQL username.
            'password' => env('DB_PASSWORD', ''), // MySQL password.
            'unix_socket' => env('DB_SOCKET', ''), // MySQL Unix socket.
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [], // MySQL driver options.
        ],

        // Additional database connections (e.g., PostgreSQL, SQL Server) can be configured here.

    ],

    'migrations' => 'migrations', // Table for storing migration information.

    'redis' => [
        // Configuration for Redis caching and session handling.

        'client' => env('REDIS_CLIENT', 'phpredis'), // Redis client driver.

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'), // Redis key prefix.
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'), // Redis host.
            'password' => env('REDIS_PASSWORD', null), // Redis password.
            'port' => env('REDIS_PORT', '6379'), // Redis port.
            'database' => env('REDIS_DB', '0'), // Redis database number.
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'), // Redis cache database number.
        ],

    ],

];
