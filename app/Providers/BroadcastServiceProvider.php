<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register broadcasting routes for WebSocket and broadcasting events.
        Broadcast::routes();

        // Include additional broadcasting routes defined in 'channels.php'.
        require base_path('routes/channels.php');
    }
}
