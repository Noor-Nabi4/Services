<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetSupportController extends Controller
{
    public function index(){
        return view('Get_Support.index');
    }
}
