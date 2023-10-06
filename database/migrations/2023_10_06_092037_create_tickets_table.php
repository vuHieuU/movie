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
            $table->string('film_name');
            $table->date('selected_date');
            $table->time('selected_hour'); 
            $table->string('selected_room');
            $table->text('selected_seats');
            $table->unsignedBigInteger('user_id');
            $table->string('buyer_name');
            $table->unsignedBigInteger('film_id');
            $table->double('total');
            $table->timestamps();
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('user_id')->references('id')->on('users');
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
