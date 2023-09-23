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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cinemas_id');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->unsignedBigInteger('food_id');
            $table->double('total');
            $table->string('status')->default(1);
            $table->timestamps();
            $table->foreign('cinemas_id')->references('id')->on('cinemas');
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('food_id')->references('id')->on('food');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
