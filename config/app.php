<?php

return [
    // Configuration settings for the Laravel application.

    'name' => env('APP_NAME', 'Laravel'), // The name of the application.
    
    'env' => env('APP_ENV', 'production'), // The environment the application is running in.

    'debug' => (bool) env('APP_DEBUG', false), // Whether debug mode is enabled.

    'url' => env('APP_URL', 'http://localhost'), // The base URL of the application.

    'asset_url' => env('ASSET_URL', null), // The URL for assets (e.g., CSS, JavaScript).

    'timezone' => 'UTC', // The default timezone for the application.

    'locale' => 'en', // The default locale.

    'fallback_locale' => 'en', // The fallback locale in case of missing translations.

    'faker_locale' => 'en_US', // The locale used for Faker data generation.

    'key' => env('APP_KEY'), // The encryption key used by the application.

    'cipher' => 'AES-256-CBC', // The encryption cipher.

    'providers' => [
        // Service providers that extend the functionality of the application.
        // These providers are responsible for registering services and components.

        // Core Laravel Service Providers
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        // Custom Service Providers (Application-specific)
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ],

    'aliases' => [
        // Aliases for common Laravel facades.
        // These aliases provide convenient access to Laravel's core features.

        // Example: 'Alias' => 'Full\Namespace\Of\Facade::class',

        // (Additional aliases can be added for custom facades and classes.)
    ],
];
