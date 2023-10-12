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
        $numberOfRecords = 5;
        
        for ($i = 0; $i < $numberOfRecords; $i++) {
            $name = $faker->unique()->regexify('[A-Za-z0-9]{7}'); 
            $expiryDate = $faker->dateTimeBetween('now', '+1 year'); 
            $type = $faker->randomElement(['amount', 'percent']);
        
            if ($type === 'Discount by amount') {
                $value = $faker->numberBetween(10000, 99999);
            } else {
                $value = $faker->numberBetween(0, 100);
            }
        
            DB::table('coupons')->insert([
                'name' => $name,
                'type' => $type,
                'value' => $value,
                'expiry_date' => $expiryDate,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
