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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('dmid');
            $table->text('duration');
            $table->text('description');
            $table->string('thumb');
            $table->string('director');
            $table->string('actor');
            $table->string('language');
            $table->date('premiere_date');
            $table->string('country');
            $table->string('trailer');
            $table->text('status');
            $table->unsignedBigInteger('cinema_id');
            $table->timestamps();
            $table->foreign('dmid')->references('id')->on('categories');
            $table->foreign('cinema_id')->references('id')->on('cinemas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
