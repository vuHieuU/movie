<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'title' => 'Tin tức 1',
                'fullName' => 'Nguyễn Trọng Trí',
                'phone' => '0385088031',
                'content' => 'Nội dung 1',
                'email' => "caubelangthang2003@gmail.com",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tin tức 2',
                'fullName' => 'Nguyễn Trọng Trí',
                'phone' => '0385088031',
                'content' => 'Nội dung 2',
                'email' => "caubelangthang2003@gmail.com",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tin tức 3',
                'fullName' => 'Nguyễn Trọng Trí',
                'phone' => '0385088031',
                'content' => 'Nội dung 3',
                'email' => "caubelangthang2003@gmail.com",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
