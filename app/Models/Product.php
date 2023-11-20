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
    public function getProducts($type=null,$search=null){
        $products = Product::when($type, function ($query, $type) {
            $query->where('type', $type);
        });
        if(!empty($search)){
            $products = $products->where('title', 'LIKE',"%{$search}%")
            ->orWhere('type', 'LIKE',"%{$search}%")
            ->orWhere('amount', 'LIKE',"%{$search}%")
            ->orWhere('discounted_amount', 'LIKE',"%{$search}%");
        }
        $products = $products->get();
        return $products;
    }
    public function getAllProductsTypes(){
        return $ProductsTypes = Product::distinct()->get('type')->toArray();

    }

}
