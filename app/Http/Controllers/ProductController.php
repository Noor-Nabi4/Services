<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    public function index(){
        $ProductsWithGrouping = (new Product)->getAllProductsWithGrouping();
        return view('products.index',compact('ProductsWithGrouping'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        try {
            $data =$request->all();
            $filename = time().'.'.$request->image->getClientOriginalExtension();
            request()->image->move(public_path('Product images'), $filename);

            $data['image']=$filename;
            Product::create($data);
            return redirect()->route('products.index')->with('success', 'Product saved successfully!');
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }


}
