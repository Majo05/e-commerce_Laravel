@extends('layouts.master')
@section('assets')
    <script src="https://code.jquery.com/jquery-2.x-git.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/products_css.css">
    <title></title>
@endsection

@section('contenido')
    <div class="container">
      <div class="bg-primary text-center col-md-12">
        <p class="lead text-white">PRODUCTOS </p>
      </div>
      @forelse ($products as $product)
          <div class="row">
              <div class="col-md-3 col-sm-6">
                  <div class="product-grid5">
                      <div class="product-image5">
                          <a href="#">
                              <img class="pic-1" src="/storage/products/{{$product->image}}">
                              <img class="pic-2" src="/storage/products/{{$product->image}}">
                        <!--  <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-7.jpg">
                              <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-8.jpg">-->
                          </a>
                          <ul class="social">
                              <li><a href="/detailProducts/{{$product->id}}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                              <li><a href="{{route('order.add',$product->id)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="/detailProducts/{{$product->id}}">{{$product->name}}</a></h3>
                          <div class="price"> $ {{$product->price}}</div>
                      </div>
                  </div>
              </div>
          </div>
       @empty
          <div class='registroNoEncontrado col-12'>
              <h5 class='control-label'>No se encontraron resultados.</h5>
          </div>

     @endforelse
    </div>
    <hr>
@endsection
