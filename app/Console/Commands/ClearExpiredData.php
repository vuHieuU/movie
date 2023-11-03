<?php

namespace App\Console\Commands;

use App\Models\ShowTime;
use App\Models\showtime_seat;
use Illuminate\Console\Command;

class ClearExpiredData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-expired-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $showtimes = ShowTime::where('day', '<', now())->get();
    
        foreach ($showtimes as $showtime) {
            $showtimeId = $showtime->id;
            
            showtime_seat::where('showtime_id', $showtimeId)->delete();

            $showtime->delete();
        }
    }
}
