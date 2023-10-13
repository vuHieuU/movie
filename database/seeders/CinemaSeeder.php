<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            [
                'name' => 'Rạp số 1',
                'description' => '',
                'address' => 'Address 1',
                'city' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rạp số 2',
                'description' => 'Description 2',
                'address' => 'Address 2',
                'city' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rạp số 3',
                'description' => '',
                'address' => 'Address 1',
                'city' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rạp số 4',
                'description' => 'Description 2',
                'address' => 'Address 2',
                'city' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
