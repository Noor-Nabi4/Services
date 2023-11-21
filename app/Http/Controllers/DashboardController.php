<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $srNo =1;
        $orders=[];
        return view('dashboard.index',compact('orders','srNo'));
    }
}
