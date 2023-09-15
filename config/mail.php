<?php

return [
    // Default mailer to use.
    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp', // SMTP mail transport.
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'), // SMTP server host.
            'port' => env('MAIL_PORT', 587), // Port for the SMTP server.
            'encryption' => env('MAIL_ENCRYPTION', 'tls'), // Encryption method.
            'username' => env('MAIL_USERNAME'), // SMTP username.
            'password' => env('MAIL_PASSWORD'), // SMTP password.
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses', // Amazon SES mail transport.
        ],

        'mailgun' => [
            'transport' => 'mailgun', // Mailgun mail transport.
        ],

        'postmark' => [
            'transport' => 'postmark', // Postmark mail transport.
        ],

        'sendmail' => [
            'transport' => 'sendmail', // Sendmail mail transport.
            'path' => '/usr/sbin/sendmail -bs', // Path to the sendmail command.
        ],

        'log' => [
            'transport' => 'log', // Log mail transport (for debugging).
            'channel' => env('MAIL_LOG_CHANNEL'), // Log channel for mail logging.
        ],

        'array' => [
            'transport' => 'array', // Array mail transport (used for testing).
        ],
    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'), // Default sender email address.
        'name' => env('MAIL_FROM_NAME', 'Example'), // Default sender name.
    ],

    'markdown' => [
        'theme' => 'default', // Theme for Markdown mail rendering.

        'paths' => [
            resource_path('views/vendor/mail'), // Paths for Markdown mail templates.
        ],
    ],
];
