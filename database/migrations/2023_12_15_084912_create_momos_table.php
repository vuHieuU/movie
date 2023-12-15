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
        Schema::create('momos', function (Blueprint $table) {
            $table->id();
            $table->text('partnerCode')->nullable();
            $table->text('orderId')->nullable();
            $table->text('requestId')->nullable();
            $table->text('amount')->nullable();
            $table->text('orderInfo')->nullable();
            $table->text('orderType')->nullable();
            $table->text('transId')->nullable();
            $table->text('resultCode')->nullable();
            $table->text('message')->nullable();
            $table->text('payType')->nullable();
            $table->text('extraData')->nullable();
            $table->text('signature')->nullable();
            $table->text('paymentOption')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('momos');
    }
};
