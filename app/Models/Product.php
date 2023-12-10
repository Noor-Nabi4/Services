<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'category_id',
        'user_id',
        'amount',
        'discounted_amount',
        'description',
        'image',
    ];
    public function getProducts($type=null,$search=null){
        $products = Product::when($type, function ($query, $type) {
            $query->where('category_id', $type);
        });
        if(!empty($search)){
            $products = $products->where('name', 'LIKE',"%{$search}%")
            ->orWhere('category_id', 'LIKE',"%{$search}%")
            ->orWhere('amount', 'LIKE',"%{$search}%")
            ->orWhere('discounted_amount', 'LIKE',"%{$search}%");
        }
        $products = $products->get();
        return $products;
    }

}
