<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SevicesController extends Controller
{
    public function index(){
        return view('services.index');
    }
}
