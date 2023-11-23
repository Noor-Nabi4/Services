<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_product')->default(false)->comment('1 for product category and 0 for service category');
            $table->string('name')->unique();
            $table->timestamps();
        });
        $categories = [
            ['name'=>'YouTube'],
            ['name'=>'Instagram'],
            ['name'=>'Facebook'],
            ['name'=>'Tiktok'],
            ['name'=>'Showpiece','is_product'=>1],
            ['name'=>'Subscriptions','is_product'=>1],
            ['name'=>'E-Commerce','is_product'=>1],
        ];
        foreach ($categories as $Category){
            Category::create($Category);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
