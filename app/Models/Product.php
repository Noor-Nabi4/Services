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

}
