<?php

namespace App\Console\Commands;

use App\Models\showtime_seat;
use Illuminate\Console\Command;
use App\Models\YourModel; // Thay thế YourModel bằng tên thực sự của model bạn đang sử dụng

class UpdateStatusCommand extends Command
{
    protected $signature = 'update:status';
    protected $description = 'Update status based on isActive and isFreeze fields';

    public function handle()
    {
        // Lấy tất cả các bản ghi từ database
        $records = showtime_seat::all(); // Thay thế YourModel bằng tên thực sự của model bạn đang sử dụng

        // Loop qua từng bản ghi và kiểm tra điều kiện
        foreach ($records as $record) {
            if ($record->isActive == 2 && $record->isFreeze == 2) {
                // Trường hợp isActive và isFreeze là 1 và 2, giữ nguyên không làm gì
            } elseif ($record->isActive != $record->isFreeze) {
                // Trường hợp isActive và isFreeze khác nhau, cập nhật isFreeze thành 1
                $record->isFreeze = 1;
                $record->save();
            }
        }

        $this->info('Status updated successfully.');
    }
}
