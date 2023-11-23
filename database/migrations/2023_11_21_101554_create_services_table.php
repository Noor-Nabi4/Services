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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('amount', 11, 2);
            $table->decimal('min_value', 9, 0);
            $table->decimal('max_value', 9, 0);
            $table->unsignedBigInteger('avg_time')->comment('In Minutes');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('start_time_from')->comment('In Minutes');
            $table->unsignedBigInteger('start_time_to')->comment('In Minutes');
            $table->unsignedBigInteger('speed_from');
            $table->unsignedBigInteger('speed_to');
            $table->unsignedBigInteger('guarranty')->nullable()->comment('In Days');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
