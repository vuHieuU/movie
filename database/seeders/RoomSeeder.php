<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'name' => 'Room A',
                'max' => 50,
                'cinema_id' => 1, // Thay thế bằng khóa ngoại thích hợp
                'isActive' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Room B',
                'max' => 80,
                'cinema_id' => 2, // Thay thế bằng khóa ngoại thích hợp
                'isActive' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm dữ liệu khác tại đây
        ]);
    }
}
