<?php

namespace App\Jobs;

use App\Models\ShowtimeSeat;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ResetFreezeStatusJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $showtime_seat;

    public function __construct($showtime_seat)
    {
        $this->showtime_seat = $showtime_seat;
    }

    public function handle()
    {
        // dd($this->showtime_seat->id);
        if ($this->showtime_seat->isActive == 1) {
            $this->showtime_seat->update(['isFreeze' => 1]);
        }
    }
}
