<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

    }
    public function create(){
        return view('Order_Now');
    }
}