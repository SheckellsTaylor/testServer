<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class archiving extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:archiving';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'archives posts';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//$destinationPath = storage_path('app/xmlentries/processed');
      DB::table('posts')->where('category', 1)->delete();
      $this->info('Post deleted!');
        //
        //tester function
        // the call method
      //  Post::where('expiration_date', '<', Carbon::now())->delete();
    //    $schedule->call(function () {
  //   Post::where('created_at', '<=', Carbon::now()->subDays(30))->delete();
  //})->daily();
    //      $schedule->call(function () {
    //        $posts = DB::table('posts')
      //        ->select('id', DB::raw('count(*) as duration'))
      //        ->groupBy('id')
      //        ->get();

        //    foreach($posts as $post)
        //    {
        //      DB::table('posts')
        //        ->where('created_at', $post->created_at)
        //        ->update(['duration' => $post->duration]);
      //      }
      //    })->everyThirtyMinutes();
    //    }

  //        $schedule->call(function () {
    //         DB::table('posts')->delete();
      //   })->monthlyOn(1, '15:00');
  //

    //     $schedule->call(function () {
      //      DB::table('posts')->delete();
    //    })->daily();

      //   $schedule->call(function () {
      //      DB::table('posts')->delete();
    //    })->quarterly();

    //   $schedule->call(function () {
    //      DB::table('posts')->delete();
  //    })->daily();
    }
}
