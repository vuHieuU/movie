<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seatLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
        $maxNumber = 12;
        $seats = [];

        foreach ($seatLetters as $letter) {
            for ($i = 1; $i <= $maxNumber; $i++) {
                $seatNumber = $letter . $i;
                $seats[] = ['seat_number' => $seatNumber, 'typeSeat_id' => 1];
            }
        }

        DB::table('seats')->insertOrIgnore($seats);
    }
}