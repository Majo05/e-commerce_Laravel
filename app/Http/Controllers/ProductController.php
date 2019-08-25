<?php

namespace App\Http\Controllers;


  use App\Category;
  use App\Product;
  use App\Brand;
  use Illuminate\Http\Request;

  class ProductController extends Controller
  {
      //
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */

      public function index(){
      $categories = Category::all();
      $brands = Brand::all();
      $products = Product::orderBy('name')->paginate(6);
      //$products = Product::paginate(6);
     return view('admin.products.index', compact('products','categories','brands'));
    //  return view('admin.products.index');
  }


      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          //

        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.registerProduct',compact('categories', 'brands'));
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
          $this->validate($request, [
          "name" => 'required|unique:products',
          "description"  => 'required',
          "dimension" => 'required',
          "category_id" => 'required',
          "price" => 'required',
          "marca_id" => "required",
          "stock" => "required|integer",
        ///  "image" => "image|dimensions:min_width=340,max_width=366,min_height=440,max_height=466",
        ]);

        $product = new Product([
            'name' => $request->input("name"),
            'description' => $request->input("description"),
            'dimension' => $request-> input("dimension"),
            'marca_id' => $request->input("marca_id"),
            'category_id' => $request->input("category_id"),
            'price' => $request->input("price"),
            'stock' => $request->input("stock"),
            //'image' => $request->input("image"),
          //  'image' => 'storage/products/image-placeholder_1.png',
        ]);

        $path = $request->file('image');

        if (!is_null($path)) {
            $filename = $path->store('public/products');
            $dbFilename = explode('/', $filename);
            $filename = $dbFilename[2];

        }

      //  $extension = $request->file('image')->extension();

        if (!is_null($path)) {
          //  $path->storeAs('public/products', '1'.$request->user()->id.'.'.$extension);
        //    $product['image'] = $path.'.'.$extension;
          $product['image'] = $filename;
        }


        $product->save();


        return redirect()->route('products.index'); //,['id' => $product->id]);

      //return Product::create($product);
      }

      /**
       * Display the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
       */
    //  public function show(Product $product)
    public function show($id_product)
      {
        $detalle = Product::find($id_product);

        //Aquí almaceno en una variable el detalle, sólo del registro seleccionado
        //Aquí retorno a la vista el detalle de la película seleccionada
        return view('admin.products.detailsProduct')->with('detalle',$detalle);
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
       */
      public function edit($product_id)
      {
          //
      $categories = Category::all();
      $brands = Brand::all();
      $product = Product::find($product_id);
      return view('admin.products.editProduct',compact('product','brands','categories'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Product  $product
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, $id)
      {
          //
          $this->validate($request, [
          "name" => 'required',
          "description"  => 'required',
          "dimension" => 'required',
          "category_id" => 'required',
          "price" => 'required',
          "marca_id" => "required",
          "stock" => "required|integer",
        ///  "image" => "image|dimensions:min_width=340,max_width=366,min_height=440,max_height=466",
        ]);

        $product = Product::find($id);

                $product->name = $request->input("name");
                $product->description = $request->input("description");
                $product->dimension = $request->input("dimension");
                $product->category_id = $request->input("category_id");
                $product->price = $request->input("price");
                $product->marca_id = $request->input("marca_id");
                $product->stock = $request->input("stock");

        $path = $request['image'];

        if (!is_null($path)) {
            $filename = $path->store('public/products');
            $dbFilename = explode('/', $filename);
            $filename = $dbFilename[2];

        }

        if(isset($filename)) {
            $product->image = $filename;
        }

        $product->save();

        return redirect()->route('products.show',['id' => $id]);
      //  return redirect()->route('products.index'); //,['id' => $product->id]);

      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  \App\Product  $produc
       * @return \Illuminate\Http\Response
       */
      public function destroy($product_id)
      {
          //
          $product = Product::find($product_id);
          $product->delete();

          return redirect()->route("products.index");
      }

}
