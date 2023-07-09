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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->date('order_data');
            $table->date('order_timestamp');
            $table->double('order_total');
            $table->double('tax_total');
            $table->double('shipping_total');
            $table->string('order_status')->default('Pending');
            $table->text('delivery_address');
            $table->string('delivery_status')->default('Pending');
            $table->string('payment_type');
            $table->string('payment_status')->default('Pending');
            $table->string('currency')->default('BDT');
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
