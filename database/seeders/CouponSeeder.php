<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $numberOfRecords = 10;
        for ($i = 0; $i < $numberOfRecords; $i++) {
            $name = $faker->unique()->regexify('[A-Za-z0-9]{7}'); // Tạo chuỗi ngẫu nhiên có 7 ký tự
            $expiryDate = $faker->dateTimeBetween('now', '+1 year'); 
            DB::table('coupons')->insert([
                'name' => $name,
                'type' => $faker->word,
                'expiry_date' => $expiryDate,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
