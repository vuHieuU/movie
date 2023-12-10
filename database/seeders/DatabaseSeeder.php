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
        $this->call(CinemaSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(SeatSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(FilmSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(NewSeeder::class);
        $this->call(ContactSeeder::class);



        $roles = [
            ['name'=>'admin','display_name'=>'admin','group'=>'admin','guard_name'=>'admin']
      ];
      foreach ($roles as $role) {
          role::updateOrCreate($role);
      }
      $permissions = [
        //user
           ['name'=>'create-user','display_name'=>'create user','group'=>'user'],
           ['name'=>'update-user','display_name'=>'update user','group'=>'user'],
           ['name'=>'show-user','display_name'=>'show user','group'=>'user'],
           ['name'=>'delete-user','display_name'=>'delete user','group'=>'user'],
        //role
           ['name'=>'create-role','display_name'=>'create role','group'=>'role'],
           ['name'=>'update-role','display_name'=>'update role','group'=>'role'],
           ['name'=>'show-role','display_name'=>'show role','group'=>'role'],
           ['name'=>'delete-role','display_name'=>'delete role','group'=>'role'],
        //films
           ['name'=>'create-films','display_name'=>'create films','group'=>'films'],
           ['name'=>'update-films','display_name'=>'update films','group'=>'films'],
           ['name'=>'show-films','display_name'=>'show films','group'=>'films'],
           ['name'=>'delete-films','display_name'=>'delete films','group'=>'films'],
        //coupon
           ['name'=>'create-coupon','display_name'=>'create coupon','group'=>'coupon'],
           ['name'=>'update-coupon','display_name'=>'update coupon','group'=>'coupon'],
           ['name'=>'show-coupon','display_name'=>'show coupon','group'=>'coupon'],
           ['name'=>'delete-coupon','display_name'=>'delete coupon','group'=>'coupon'],
        //food
           ['name'=>'create-food','display_name'=>'create food','group'=>'food'],
           ['name'=>'update-food','display_name'=>'update food','group'=>'food'],
           ['name'=>'show-food','display_name'=>'show food','group'=>'food'],
           ['name'=>'delete-food','display_name'=>'delete food','group'=>'food'],
        //categories
           ['name'=>'create-categories','display_name'=>'create categories','group'=>'categories'],
           ['name'=>'update-categories','display_name'=>'update categories','group'=>'categories'],
           ['name'=>'show-categories','display_name'=>'show categories','group'=>'categories'],
           ['name'=>'delete-categories','display_name'=>'delete categories','group'=>'categories'],
        //city
           ['name'=>'create-city','display_name'=>'create city','group'=>'city'],
           ['name'=>'update-city','display_name'=>'update city','group'=>'city'],
           ['name'=>'show-city','display_name'=>'show city','group'=>'city'],
           ['name'=>'delete-city','display_name'=>'delete city','group'=>'city'],
        //cinemas
           ['name'=>'create-cinemas','display_name'=>'create cinemas','group'=>'cinemas'],
           ['name'=>'update-cinemas','display_name'=>'update cinemas','group'=>'cinemas'],
           ['name'=>'show-cinemas','display_name'=>'show cinemas','group'=>'cinemas'],
           ['name'=>'delete-cinemas','display_name'=>'delete cinemas','group'=>'cinemas'],
        //seats
           ['name'=>'create-seats','display_name'=>'create seats','group'=>'seats'],
           ['name'=>'update-seats','display_name'=>'update seats','group'=>'seats'],
           ['name'=>'show-seats','display_name'=>'show seats','group'=>'seats'],
           ['name'=>'delete-seats','display_name'=>'delete seats','group'=>'seats'],
        //typeseats
           ['name'=>'create-typeseats','display_name'=>'create typeseats','group'=>'typeseats'],
           ['name'=>'update-typeseats','display_name'=>'update typeseats','group'=>'typeseats'],
           ['name'=>'show-typeseats','display_name'=>'show typeseats','group'=>'typeseats'],
           ['name'=>'delete-typeseats','display_name'=>'delete typeseats','group'=>'typeseats'],
        //rooms
           ['name'=>'create-rooms','display_name'=>'create rooms','group'=>'rooms'],
           ['name'=>'update-rooms','display_name'=>'update rooms','group'=>'rooms'],
           ['name'=>'show-rooms','display_name'=>'show rooms','group'=>'rooms'],
           ['name'=>'delete-rooms','display_name'=>'delete rooms','group'=>'rooms'],
        //showtime
           ['name'=>'create-showtime','display_name'=>'create showtime','group'=>'showtime'],
           ['name'=>'update-showtime','display_name'=>'update showtime','group'=>'showtime'],
           ['name'=>'show-showtime','display_name'=>'show showtime','group'=>'showtime'],
           ['name'=>'delete-showtime','display_name'=>'delete showtime','group'=>'showtime'],
        //ticket
           ['name'=>'create-ticket','display_name'=>'create ticket','group'=>'ticket'],
           ['name'=>'show-ticket','display_name'=>'show ticket','group'=>'ticket'],
           ['name'=>'delete-ticket','display_name'=>'delete ticket','group'=>'ticket'],
        //news
           ['name'=>'create-news','display_name'=>'create news','group'=>'news'],
           ['name'=>'update-news','display_name'=>'update news','group'=>'news'],
           ['name'=>'show-news','display_name'=>'show news','group'=>'news'],
           ['name'=>'delete-news','display_name'=>'delete news','group'=>'news'],
            //rank
            ['name'=>'create-rank','display_name'=>'create rank','group'=>'rank'],
            ['name'=>'update-rank','display_name'=>'update rank','group'=>'rank'],
            ['name'=>'show-rank','display_name'=>'show rank','group'=>'rank'],
            ['name'=>'delete-rank','display_name'=>'delete rank','group'=>'rank'],
        //overview
           ['name'=>'show-overview','display_name'=>'show overview','group'=>'overview'],
            //thông báo
            ['name'=>'show-Notification','display_name'=>'show Notification','group'=>'Notification'],
             //thống kê
             ['name'=>'show-statistical','display_name'=>'show statistical','group'=>'statistical'],
      ];
      foreach ($permissions as $permission) {
          permission::updateOrCreate($permission);
      }
    }
}
