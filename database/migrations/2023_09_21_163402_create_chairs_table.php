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
        Schema::create('chairs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('typeChair_id');
            $table->string('status')->default(1);
            $table->timestamps();
            $table->foreign('typeChair_id')->references('id')->on('chair_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chairs');
    }
};
