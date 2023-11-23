<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllServicesByCategoryId(Category $Category,$ajax=0){
        // dd($Category->Services);
        if($ajax){
            return response()->json($Category->Services);
        }

    }
}
