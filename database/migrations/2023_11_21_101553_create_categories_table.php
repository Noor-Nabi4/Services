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
            $table->boolean('is_product')->default(true)->comment('1 for product category and 0 for service category');
            $table->string('name');
            $table->timestamps();
        });
        $categories = [
            ['name'=>'YouTube','is_product'=>0],
            ['name'=>'Instagram','is_product'=>0],
            ['name'=>'Facebook','is_product'=>0],
            ['name'=>'Tiktok','is_product'=>0],
            ['name'=>'Showpiece'],
            ['name'=>'Subscriptions'],
            ['name'=>'E Commerce'],
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
