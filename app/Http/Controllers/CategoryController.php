<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category_id){
        $detalleCategory = Product::where('category_id', $category_id)->get();
        //dd($detalleCategory);
        return view('category')->with('products',$detalleCategory);
        
    }

}
