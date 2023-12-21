<?php

namespace App\Console\Commands;

use App\Models\rank;
use App\Models\User;
use Illuminate\Console\Command;

class UpdateRank extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-rank';

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
        $users = User::all();
        foreach ($users as $user) {
            $points = $user->point;
            
            if ($points) {
                $rank = rank::where('minium_score', '<=', $points)
                ->orderBy('minium_score', 'desc')
                                ->first();
    
                if ($rank) {
                    if ($rank->id > $user->rank_id) {
                        $user->rank_id = $rank->id;
                        $user->save();
                    }
                }
            }
        }
    }
}
