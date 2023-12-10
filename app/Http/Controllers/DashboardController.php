<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $srNo =1;
        $orders = Order::where('user_id',Auth::user()->id)->get();
        return view('dashboard.index',compact('orders','srNo'));
    }
}
