<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable =[
        'type',
        'name',
        'rate',
        'min_value',
        'max_value',
        'avg_time',
        'description',
        'guarranty'
    ];
}