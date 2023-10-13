<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\role;
use App\Models\permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //FAKE dữ liệu tại đây
        $this->call(CouponSeeder::class);
        $this->call(citySeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(CinemaSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(SeatSeeder::class);


        $roles = [
            ['name'=>'Super-admin','display_name'=>'super admin','group'=>'admin','guard_name'=>'admin']
      ];
      foreach ($roles as $role) {
          role::updateOrCreate($role);
      }
      $permissions = [
           ['name'=>'create-user','display_name'=>'create user','group'=>'user'],
           ['name'=>'update-user','display_name'=>'update user','group'=>'user'],
           ['name'=>'show-user','display_name'=>'show user','group'=>'user'],
           ['name'=>'delete-user','display_name'=>'delete user','group'=>'user'],

           ['name'=>'create-role','display_name'=>'create role','group'=>'role'],
           ['name'=>'update-role','display_name'=>'update role','group'=>'role'],
           ['name'=>'show-role','display_name'=>'show role','group'=>'role'],
           ['name'=>'delete-role','display_name'=>'delete role','group'=>'role'],
      ];
      foreach ($permissions as $permission) {
          permission::updateOrCreate($permission);
      }
    }
}
