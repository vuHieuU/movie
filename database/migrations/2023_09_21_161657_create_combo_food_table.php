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
        Schema::create('combo_food', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id');
            $table->string('name');
            $table->string('thumb');
            $table->double('price');
            $table->text('description');
            $table->string('size');
            $table->string('status')->default(1);
            $table->timestamps();
            $table->foreign('food_id')->references('id')->on('food');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combo_food');
    }
};
