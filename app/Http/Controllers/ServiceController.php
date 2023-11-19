<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $servicesGrouping =(new Service)->getServices();
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
    public function ajax(Request $request,$search = null)
    {
        try {
            $servicesGrouping =(new Service)->getServices($search);

        $html = view('services.include.data', compact('servicesGrouping'))->render();

        return response()->json(compact('html'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
