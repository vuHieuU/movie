<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'Tin tức 1',
                'thumbnail' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'slug' => 'tin-tuc-1',
                'content' => 'Nội dung 1',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tin tức 2',
                'thumbnail' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'slug' => 'tin-tuc-2',
                'content' => 'Nội dung 2',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tin tức 3',
                'thumbnail' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'slug' => 'tin-tuc-3',
                'content' => 'Nội dung 3',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
