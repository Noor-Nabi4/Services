<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $Category = Category::all();
        return view('Orders.index',compact('Category'));
    }
    public function create(){

    }
}
