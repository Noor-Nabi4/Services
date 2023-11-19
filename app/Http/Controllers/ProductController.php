<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($type = null){
        $Products = (new Product)->getProducts($type);

        $ProductsTypes = (new Product)->getAllProductsTypes();
        // dd($ProductsTypes);
        return view('products.index',compact('Products','ProductsTypes','type'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        try {
            $data =$request->all();
            $filename = time().'.'.$request->image->getClientOriginalExtension();
            request()->image->move(public_path('Product_images'), $filename);

            $data['image']=$filename;
            Product::create($data);
            return redirect()->route('products.index')->with('success', 'Product saved successfully!');
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
    }


}
