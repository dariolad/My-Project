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
        $table->string('order_id')->primary()->unique();
        $table->string('user_id')->unique();
        $table->string('total');
        $table->string('order_status');
        $table->string('shipping_address');
        $table->timestamp('order_date');
        $table->timestamp('update_order_date');
        $table->string('products_details');
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
