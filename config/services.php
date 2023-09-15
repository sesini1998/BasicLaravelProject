<?php

return [
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'), // Mailgun domain for sending emails.
        'secret' => env('MAILGUN_SECRET'), // Mailgun API secret key.
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'), // Mailgun API endpoint (default is api.mailgun.net).
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'), // Postmark API token for sending emails.
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'), // AWS access key ID for Amazon SES.
        'secret' => env('AWS_SECRET_ACCESS_KEY'), // AWS secret access key for Amazon SES.
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'), // AWS region (default is us-east-1).
    ],
];
