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
        Schema::create('combofood_foods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('combo_food_id');
            $table->unsignedBigInteger('food_id');
            $table->string('isActive')->default(1);
            $table->timestamps();
            $table->foreign('combo_food_id')->references('id')->on('combo_food');
            $table->foreign('food_id')->references('id')->on('food');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combofood_foods');
    }
};
