<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = session('carrito.products');
        return view('/order')->with('product', $product);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        $order = Order::where('user_id', Auth::User()->id);
        return view('order')->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
/*
    public function add($id)
      {
        $product =  Product::find($id);
        $products = [
              'id' => $product->id,
              "name" => $product->name,
              'description' => $product->description,
              'category_id' => $product->category_id,
              'price' => $product->price,
              'image' => $product->image,
        ];

      //   session()->put("user.order." . $id, $products);


        // return view('order');

         $order = new Order([
           'user_id'  => Auth::User()->id,
           'amount'   => 0, //$products->price,
           //'image' => $request->input("image"),
         //  'image' => 'storage/products/image-placeholder_1.png',
         ]);



          $order ->save();

          return redirect()->route('order');

      }
      */
    public function add($id)
       {
           $product = collect(session('carrito.products'));
           $product = Product::find($id);
           $product[$product->id]=$product;
           session()->push('carrito.products', $product);
           $limit = 10;
           $product = Product::make()->paginate($limit);
           return redirect('/order');
       }

     public function remove(Request $request, $id)
     {
       //Método que permite eliminar un producto del carrito
       if(!count(session('carrito.products')) == 0) {
         foreach(session('carrito.products') as $key => $product) {
           if($product[$id]) {
             $request->session()->pull('carrito.products.'.$key, 'default');
             return redirect('/order');
           }
         }
       } else {
         return redirect('/viewAllProducts');
       }
     }


}
