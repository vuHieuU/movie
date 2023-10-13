<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Hoạt hình',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kinh dị',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trinh Thám',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
