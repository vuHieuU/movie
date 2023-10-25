<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShowTime;
use App\Models\Film;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ShowtimeSeed extends Seeder
{
    public function run()
    {
        // Lấy danh sách rạp chiếu phim từ bảng 'cinemas'
        $cinemas = DB::table('cinemas')->select('id')->get();

        $filmIds = Film::pluck('id')->all();

        // Đặt thời gian ban đầu là 0 giờ
        $hour = 0;

        $showTimes = [];

        foreach ($filmIds as $filmId) {
            $today = Carbon::tomorrow()->startOfDay(); // Bắt đầu từ ngày hôm sau

            for ($day = 0; $day < 5; $day++) { // Tạo lịch chiếu cho 5 ngày
                for ($i = 0; $i < 12; $i++) { // Tạo 12 bản ghi cho mỗi ngày
                    // Tạo ngày và giờ cho lịch chiếu
                    $showDateTime = $today->copy()->addHours($hour);

                    $showTimes[] = [
                        'film_id' => $filmId,
                        'room_id' => 1, // Thay thế bằng ID của phòng cụ thể
                        'day' => $showDateTime->toDateString(),
                        'hour' => $showDateTime->format('H:i:s'),
                        'isActive' => 1,
                        'cinema_id' => $cinemas->random()->id,
                    ];

                    $hour += 2; // Tăng thời gian lên 2 giờ
                }

                $today->addDay(); // Chuyển sang ngày tiếp theo
                $hour = 0; // Reset thời gian về 0 giờ
            }
        }

        // Tạo các bản ghi trong bảng 'show_times'
        foreach ($showTimes as $showTime) {
            ShowTime::create($showTime);
        }
    }
}
