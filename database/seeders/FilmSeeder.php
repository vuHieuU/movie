<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'name' => 'Phim số 1',
                'duration' => '180',
                'description' => 'Chi tiết phim',
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => "đang chiếu",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phim số 2',
                'duration' => '178',
                'description' => 'Chi tiết phim',
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => "đang chiếu",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Phim số 3',
                'duration' => '175',
                'description' => 'Chi tiết phim',
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => "sắp ra mắt",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
