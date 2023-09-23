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
        Schema::create('cinemas_films', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cinemas_id');
            $table->unsignedBigInteger('film_id');
            $table->string('isActive')->default(1);
            $table->timestamps();
            $table->foreign('cinemas_id')->references('id')->on('cinemas');
            $table->foreign('film_id')->references('id')->on('films');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinemas_films');
    }
};
