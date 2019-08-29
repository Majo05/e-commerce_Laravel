<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use App\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function index2(){
        $products = Product::orderBy('name')->paginate(8);
        return view('viewAllProducts', compact('products'));
        //, compact('products','categories','brands'));
    }

    public function show($id_product)
      {
        $detalle = Product::find($id_product);
        $detalleMarca = $detalle->marca_id;
        $miMarca = Brand::find($detalleMarca);

        //Aquí almaceno en una variable el detalle, sólo del registro seleccionado
        //Aquí retorno a la vista el detalle de la película seleccionada
        return view('detailProducts')->with('product',$detalle)->with('miMarca', $miMarca);
      }

}
