<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sevices extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'rate',
        'min_value',
        'max_value',
        'avg_time',
        'description',
        'guarranty'
    ];
}
