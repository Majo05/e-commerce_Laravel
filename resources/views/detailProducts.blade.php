@extends('layouts.master')
@section('assets')
    <title></title>
    <script src="https://code.jquery.com/jquery-2.x-git.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/products.css">
@endsection
@section('contenido')
<form method="get" action="{{route('carrito.add',['id' => $product->id])}}" enctype="multipart/form-data" >
  <!--@method('PUT')-->
  @csrf
<!--<form method="POST" action="/detailsProduct/{id}" enctype="multipart/form-data" > -->
  <div class="container">
    <div class="card_detailProduct">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="col-md-6">
              <img src="/storage/products/{{$product->image}}" />
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">{{$product->name}}</h3>
            <!--<div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>-->
            <p class="product-description">{{$product->description}}</p>
            <h5 class="price-product">Precio: <span>$ {{$product->price}}</span></h4>

            <h5 class="colors">Marca:
              <span class="" data-toggle="tooltip" title="Not In store"> {{$miMarca->name}}</span>
            </h5>
            <div class="">
              <button class="btn_productDetail" type="submit">Agregar al carrito<span class="fa fa-shopping-cart"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
