<?php

namespace App\Console;

use App\Models\Post;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Redis;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule) // TODO Task Scheduling
    {
        $schedule->call(function(){
            $keys = Redis::keys('*'); // TODO Task Scheduling


            foreach($keys as $key){
                $counter = Redis::get($key);
                $keyArray = explode(":", $key);
                
                if(sizeof($keyArray) == 3){
                    $postId = end($keyArray);
                    $post =  Post::find($postId);
                    
                    if ($post) {
                        $post->views = $counter;
                        $post->save();
                    }
                }
            }
        })->everyMinute(); // TODO Task Scheduling
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
