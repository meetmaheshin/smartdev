<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    protected $commands = [

        Commands\MetamaskCron::class,
        Commands\Dev3DaoCron::class,
        Commands\USDTCron::class,


    ];
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('metamask:cron')->everyFifteenMinutes();
        $schedule->command('dev3dao:cron')->everyFifteenMinutes();
        $schedule->command('usdt:cron')->everyFifteenMinutes();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
