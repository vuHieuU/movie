<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->text('user_email');
            $table->text('film_name');
            $table->text('date');
            $table->text('hour');
            $table->text('seats');
            $table->text('cinema');
            $table->text('food')->nullable();
            $table->text('coupon_code')->nullable();
            $table->text('total');
            $table->text('code');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
