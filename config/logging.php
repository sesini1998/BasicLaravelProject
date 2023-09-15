<?php

return [
    // Default logging channel to use.
    'default' => env('LOG_CHANNEL', 'stack'),

    'channels' => [
        'stack' => [
            'driver' => 'stack', // Stack driver allows combining multiple channels.
            'channels' => ['single'], // Channels to include in the stack.
            'ignore_exceptions' => false, // Whether to ignore exceptions when logging.
        ],

        'single' => [
            'driver' => 'single', // Single driver logs to a single file.
            'path' => storage_path('logs/laravel.log'), // Path to the log file.
            'level' => 'debug', // Log level.
        ],

        'daily' => [
            'driver' => 'daily', // Daily driver logs to a file with daily rotation.
            'path' => storage_path('logs/laravel.log'), // Path to the log file.
            'level' => 'debug', // Log level.
            'days' => 14, // Number of days to keep log files.
        ],

        'slack' => [
            'driver' => 'slack', // Slack driver sends log messages to Slack.
            'url' => env('LOG_SLACK_WEBHOOK_URL'), // Slack webhook URL.
            'username' => 'Laravel Log', // Username for log messages.
            'emoji' => ':boom:', // Emoji to use for log messages.
            'level' => 'critical', // Log level for Slack messages.
        ],

        'papertrail' => [
            'driver' => 'monolog', // Monolog driver for custom handlers.
            'level' => 'debug', // Log level.
            'handler' => SyslogUdpHandler::class, // Syslog UDP handler.
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'), // Papertrail host.
                'port' => env('PAPERTRAIL_PORT'), // Papertrail port.
            ],
        ],

        'stderr' => [
            'driver' => 'monolog', // Monolog driver for custom handlers.
            'handler' => StreamHandler::class, // Stream handler (outputs to stderr).
            'formatter' => env('LOG_STDERR_FORMATTER'), // Log formatter.
            'with' => [
                'stream' => 'php://stderr', // Output stream.
            ],
        ],

        'syslog' => [
            'driver' => 'syslog', // Syslog driver (for Unix-like systems).
            'level' => 'debug', // Log level.
        ],

        'errorlog' => [
            'driver' => 'errorlog', // Error log driver (logs to the PHP error log).
            'level' => 'debug', // Log level.
        ],

        'null' => [
            'driver' => 'monolog', // Monolog driver for custom handlers.
            'handler' => NullHandler::class, // Null handler (discards log messages).
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'), // Log path for emergency log channel.
        ],
    ],
];
