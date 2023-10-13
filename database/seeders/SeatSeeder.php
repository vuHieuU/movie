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
        DB::table("seats")->insert([
            ["seat_number"=>"A1" , "typeSeat_id"=>1],
            ["seat_number"=>"A2" , "typeSeat_id"=>1],
            ["seat_number"=>"A3" , "typeSeat_id"=>1],
            ["seat_number"=>"A4" , "typeSeat_id"=>1],
            ["seat_number"=>"A5" , "typeSeat_id"=>1],
            ["seat_number"=>"A6" , "typeSeat_id"=>1],
            ["seat_number"=>"A7" , "typeSeat_id"=>1],
            ["seat_number"=>"A8" , "typeSeat_id"=>1],
            ["seat_number"=>"A9" , "typeSeat_id"=>1],
            ["seat_number"=>"A10" , "typeSeat_id"=>1],
            ["seat_number"=>"A11" , "typeSeat_id"=>1],
            ["seat_number"=>"A12" , "typeSeat_id"=>1],
            ["seat_number"=>"A13" , "typeSeat_id"=>1],
            ["seat_number"=>"A14" , "typeSeat_id"=>1],
            ["seat_number"=>"A15" , "typeSeat_id"=>1],
            ["seat_number"=>"A16" , "typeSeat_id"=>1],
            ["seat_number"=>"A17" , "typeSeat_id"=>1],
            ["seat_number"=>"A18" , "typeSeat_id"=>1],
            ["seat_number"=>"A19" , "typeSeat_id"=>1],
            ["seat_number"=>"A20" , "typeSeat_id"=>1],



            ["seat_number"=>"B1" , "typeSeat_id"=>2],
            ["seat_number"=>"B2" , "typeSeat_id"=>2],
            ["seat_number"=>"B3" , "typeSeat_id"=>2],
            ["seat_number"=>"B4" , "typeSeat_id"=>2],
            ["seat_number"=>"B5" , "typeSeat_id"=>2],
            ["seat_number"=>"B6" , "typeSeat_id"=>2],
            ["seat_number"=>"B7" , "typeSeat_id"=>2],
            ["seat_number"=>"B8" , "typeSeat_id"=>2],
            ["seat_number"=>"B9" , "typeSeat_id"=>2],
            ["seat_number"=>"B10" , "typeSeat_id"=>2],
            ["seat_number"=>"B11" , "typeSeat_id"=>2],
            ["seat_number"=>"B12" , "typeSeat_id"=>2],
            ["seat_number"=>"B13" , "typeSeat_id"=>2],
            ["seat_number"=>"B14" , "typeSeat_id"=>2],
            ["seat_number"=>"B15" , "typeSeat_id"=>2],
            ["seat_number"=>"B16" , "typeSeat_id"=>2],
            ["seat_number"=>"B17" , "typeSeat_id"=>2],
            ["seat_number"=>"B18" , "typeSeat_id"=>2],
            ["seat_number"=>"B19" , "typeSeat_id"=>2],
            ["seat_number"=>"B20" , "typeSeat_id"=>2],
                    ]);
    }
}
