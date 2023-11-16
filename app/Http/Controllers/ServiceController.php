<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy('type')->get()->toArray();
        $servicesGrouping =[];
        foreach($services as $data){
            $servicesGrouping[$data['type']][] =$data;
        }
        //dd($servicesGrouping);
        return view('services.index',compact('servicesGrouping'));
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
