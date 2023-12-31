<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'is_product'
    ];
    public function Services()
    {
        return $this->hasMany(Service::class);
    }
    public function getAllProductCategory(){
        return Category::where('is_product',1)->get();
    }
    public function getAllServicesCategory(){
        return Category::where('is_product',0)->get();
    }
}
