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
        Schema::create('film_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('movie_starts_id');
            $table->string('isActive')->default(1);
            $table->timestamps();
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('movie_starts_id')->references('id')->on('movie_starts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_hours');
    }
};
