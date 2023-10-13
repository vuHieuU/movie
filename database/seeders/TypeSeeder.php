<?php

namespace Database\Seeders;

use App\Models\typeseats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("typeseats")->insert([
            ["name"=>"VIP" , "price"=>"65.000"],
            ["name"=>"Thường" , "price"=>"40.000"],

                    ]);
    }
}
