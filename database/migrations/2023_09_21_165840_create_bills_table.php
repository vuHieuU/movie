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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedBigInteger('cinemas_id');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('chair_id');
            $table->date('date');
            $table->double('total');
            $table->timestamps();
            $table->foreign('cinemas_id')->references('id')->on('cinemas');
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('food_id')->references('id')->on('food');
            $table->foreign('chair_id')->references('id')->on('chairs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
