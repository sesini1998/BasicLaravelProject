<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
       
    ];

    protected function schedule(Schedule $schedule)
    {
        
    }

    protected function commands()
    {
        // Load custom Artisan commands from the 'Commands' directory.
        $this->load(__DIR__.'/Commands');

        // Include additional console routes from the 'console.php' file.
        require base_path('routes/console.php');
    }
}
