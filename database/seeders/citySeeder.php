<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'Hà nội', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TP HCM', 'created_at' => now(), 'updated_at' => now()],
            // Thêm dữ liệu khác tại đây
        ]);
    }
}
