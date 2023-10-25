<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food')->insert([
            [
                'name' => 'Combo 1',
                'thumb' => 'https://files.betacorp.vn/files/media/images/2023/06/15/sweet-combo-154545-150623-48.png',
                'price' => 69000,
                'status' => 1,
                'qty' => 50,
                'content' => 'Combo ngon bổ rẻ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Combo 2',
                'thumb' => 'https://files.betacorp.vn/files/media/images/2023/06/15/beta-combo-154428-150623-83.png',
                'price' => 99000,
                'status' => 1,
                  'qty' => 50,
                   'content' => 'Combo ngon bổ rẻ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Combo 3',
                'thumb' => 'https://files.betacorp.vn/files/media/combopackage/2023/07/27/combo-see-me-08-083746-270723-92.png',
                'price' => 129999,
                'status' => 1,
                  'qty' => 50,
                   'content' => 'Combo ngon bổ rẻ',
                'created_at' => now(),
                'updated_at' => now(),
            ],     
        ]);
    }
}
