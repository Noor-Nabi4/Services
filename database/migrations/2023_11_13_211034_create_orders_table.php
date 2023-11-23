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
            $table->string('url');
            $table->decimal('charges', 11, 2);
            $table->unsignedBigInteger('quantity');
            /* $table->boolean('is_service')->default(true)->comment('1 for service And 2 for product'); */
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('user_id')->references('id')->on('users');
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
