<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
      //  Commands/archiving::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
    //function goes here
 //$schedule->command('command:archiving')->everyMinute();
 //$schedule->call(function () {
    //    DB::table('posts')->where('category', 0)->delete();
  //   })->everyMinute();
    // $schedule->command('archiving')
  //  ->cron('*/1 * * * * *')->sendOutputTo(storage_path('logs/output.log'));
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
