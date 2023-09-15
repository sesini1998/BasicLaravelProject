<?php

return [
    // Configuration for handling Cross-Origin Resource Sharing (CORS) in Laravel applications.

    'paths' => ['api/*'], // Paths to which CORS rules apply.

    'allowed_methods' => ['*'], // Allowed HTTP methods (e.g., GET, POST, PUT).

    'allowed_origins' => ['*'], // Allowed origins (domains) that can make CORS requests.

    'allowed_origins_patterns' => [], // Allowed origin patterns (regular expressions).

    'allowed_headers' => ['*'], // Allowed HTTP headers in CORS requests.

    'exposed_headers' => [], // HTTP headers exposed to the client in CORS responses.

    'max_age' => 0, // Maximum age (in seconds) of CORS preflight requests.

    'supports_credentials' => false, // Whether to allow sending cookies and HTTP authentication information in CORS requests.
];
