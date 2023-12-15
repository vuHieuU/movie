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
        Schema::create('vnpays', function (Blueprint $table) {
            $table->id();
            $table->text('vnp_Amount')->nullable();
            $table->text('vnp_BankCode')->nullable();
            $table->text('vnp_BankTranNo')->nullable();
            $table->text('vnp_CardType')->nullable();
            $table->text('vnp_OrderInfo')->nullable();
            $table->text('vnp_PayDate')->nullable();
            $table->text('vnp_ResponseCode')->nullable();
            $table->text('vnp_TmnCode')->nullable();
            $table->text('vnp_TransactionNo')->nullable();
            $table->text('vnp_TransactionStatus')->nullable();
            $table->text('vnp_TxnRef')->nullable();
            $table->text('vnp_SecureHash')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vnpays');
    }
};
