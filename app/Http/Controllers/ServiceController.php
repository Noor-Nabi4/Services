<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('services.index',compact('services'));
    }
    public function create(){
        return view('services.create');
    }
    public function store(Request $request){
        $data =$request->all();
        Service::create($data);
         return redirect()->route('services.index')->with('success', 'service saved successfully!');
    }
}
