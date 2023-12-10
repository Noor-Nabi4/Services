<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index($type = null){
        $Products = (new Product)->getProducts($type);
        $ProductCategorys = (new Category)->getAllProductCategory();
        return view('products.index',compact('Products','ProductCategorys','type'));
    }
    public function create(){
        $categories = (new Category)->getAllProductCategory();
        return view('products.create',compact('categories'));
    }
    public function store(Request $request){
        try {
            $data =$request->all();
            $data['user_id'] = Auth::user()->id;
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
    public function ajax(Request $request,$search = null)
    {
        try {
            $Products =(new Product)->getProducts("",$search);
        $html = view('products.include.data', compact('Products'))->render();

        return response()->json(compact('html'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


}
