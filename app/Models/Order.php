<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =[
        'status',
        'code',
        'message',
        'transaction_id',
        'issuer_name',
        'email',
        'ip_address',
        'url',
        'channel_name',
        'subscribers',
        'name',
        'mobile_no',
        'postal_code',
        'city_id',
        'state_id',
        'address',
        'TXNAMT',
        'quantity',
        'user_id',
        'product_id',
        'service_id',
    ];
}
