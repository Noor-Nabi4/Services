<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    $orders = [
        '0',
        'service',
        'link',
        'status',
        'charge',
        'Quantity',
        'info',
        'REorder'
    ];
        return view('dashboard',compact('orders'));
    }
}
