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
        // DB::table('films')->insert([
        //     [
        //         'name' => 'Đất Rừng Phương Nam',
        //         'duration' => '180',
        //         'description' => 'Chi tiết phim',
        //         "slug" => "dat-rung-phuong-nam",
        //         'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
        //         'director' => 'Đạo diễn 1',
        //         'actor' => 'Diễn viên',
        //         'language' => 'Việt Nam',
        //         'premiere_date' => now(),
        //         'country' => 'Hà nội',
        //         'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        //         'status' => 1,
        //         'meta_title' => "Pokemon Title",
        //         'meta_keyword' => "Pokemon keyword",
        //         'meta_description' => "Pokemon Description",
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Kumanthong: Quỷ Linh Nhi',
        //         'duration' => '178',
        //         'description' => 'Chi tiết phim',
        //         "slug" => "kumanthong-quy-linh-nhi",
        //         'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
        //         'director' => 'Đạo diễn 1',
        //         'actor' => 'Diễn viên',
        //         'language' => 'Việt Nam',
        //         'premiere_date' => now(),
        //         'country' => 'Hà nội',
        //         'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        //         'status' => 1,
        //         'meta_title' => "Pokemon Title",
        //         'meta_keyword' => "Pokemon keyword",
        //         'meta_description' => "Pokemon Description",
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Quỷ Ám: Tín Đồ',
        //         'duration' => '175',
        //         'description' => 'Chi tiết phim',
        //         "slug" => "quy-am-tin-do",
        //         'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
        //         'director' => 'Đạo diễn 1',
        //         'actor' => 'Diễn viên',
        //         'language' => 'Việt Nam',
        //         'premiere_date' => now(),
        //         'country' => 'Hà nội',
        //         'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        //         'status' => "sắp ra mắt",
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        DB::table('films')->insert([
            [
                'name' => 'Đất Rừng Phương Nam',
                'duration' => '180',
                'description' => 'Chi tiết phim',
                "slug" => "dat-rung-phuong-nam",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kumanthong: Quỷ Linh Nhi',
                'duration' => '178',
                'description' => 'Chi tiết phim',
                "slug" => "kumanthong-quy-linh-nhi",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Quỷ Ám: Tín Đồ',
                'duration' => '175',
                'description' => 'Chi tiết phim',
                "slug" => "quy-am-tin-do",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thanh Gươm Trừ Tà',
                'duration' => '180',
                'description' => 'Chi tiết phim',
                "slug" => "thanh-guom-tru-ta",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thành Phố Ngủ Gật',
                'duration' => '178',
                'description' => 'Chi tiết phim',
                "slug" => "thanh-pho-ngu-gat",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Cú Máy Ăn Tiền',
                'duration' => '175',
                'description' => 'Chi tiết phim',
                "slug" => "cu-may-an-tien",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Âm Hồn Đô Thị',
                'duration' => '180',
                'description' => 'Chi tiết phim',
                "slug" => "am-hon-do-thi",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kị Sĩ Bóng Đêm',
                'duration' => '178',
                'description' => 'Chi tiết phim',
                "slug" => "ki-si-bong-dem",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Quỷ Môn Quan: Gọi Hồn',
                'duration' => '175',
                'description' => 'Chi tiết phim',
                "slug" => "quy-mon-quan-goi-hon",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vầng Trăng Máu',
                'duration' => '180',
                'description' => 'Chi tiết phim',
                "slug" => "vang-trang-mau",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quỷ Môn Quan',
                'duration' => '178',
                'description' => 'Chi tiết phim',
                "slug" => "quy-mon-quan",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Gọi Hồn',
                'duration' => '175',
                'description' => 'Chi tiết phim',
                "slug" => "goi-hon",
                'thumb' => 'https://statics.vincom.com.vn/tin-tuc-su-kien/286675201_2366404863497395_2708786365291395892_n.jpg',
                'director' => 'Đạo diễn 1',
                'actor' => 'Diễn viên',
                'language' => 'Việt Nam',
                'premiere_date' => now(),
                'country' => 'Hà nội',
                'trailer' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hktzirCnJmQ?si=GBIbeTWl3KsyZrA1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'status' => 1,
                'meta_title' => "Pokemon Title",
                'meta_keyword' => "Pokemon keyword",
                'meta_description' => "Pokemon Description",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
