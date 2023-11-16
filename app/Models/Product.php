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
        'shipping_fees',
        'image',
    ];
    public function getAllProductsWithGrouping(){
        $products = Product::orderBy('type','desc')->get();
        //dd($products);

        $productsGrouping =[];
        foreach($products as $product){
            switch ($product['type']) {
                case 'Showpiece':
                    $productsGrouping['Showpiece'][] =$product;
                    break;
                case 'Subscriptions':
                    $productsGrouping['Subscriptions'][] =$product;
                    break;
                case 'E_commerce':
                    $productsGrouping['E_commerce'][] =$product;
                    break;
                default:
                    break;
            }
        }
        return $productsGrouping;
    }

}
