<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'type',
        'amount',
        'discounted_amount',
        'image',
    ];
    public function getAllProducts(){
        $products = Product::all();
        return $products;
    }
    public function getAllProductsTypes(){
        return $ProductsTypes = Product::distinct()->get('type')->toArray();

    }

}
