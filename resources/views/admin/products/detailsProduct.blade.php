@extends('layouts.master')
@section('assets')
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/footer_css.css">
@endsection
@section('contenido')
<form method="POST" action="/detailsProduct/{id}" enctype="multipart/form-data" >
  <div class="contact">
  	<div class="rowRegisterProd">
  <div class="container-left col-md-3">
    <div class="contact-info">
      <div class="col-md-6">
        <img src="/storage/products/{{$detalle->image}}" />
    </div>
      <h2>Detalle producto</h2>
    </div>
  </div>
  <div class="container-rigth col-md-9">
            <div>
                NOMBRE: {{$detalle->name}}
                <br>
                DIMENSION: {{$detalle->dimension}}
                <br>
                DESCRIPCION: {{$detalle->description}}
                <br>
                PRECIO: {{$detalle->price}}
                <br>
                STOCK: {{$detalle->stock}}
                <br>
                CATEGORIA: {{$detalle->category_id['name']}}
                <br>
                MARCA: {{$detalle->marca_id['name']}}
            </div>
            <br>
            <a class="button_register" href="{{route('products.index')}}">Volver</a>
    </div
  </div></div>
  </form>
@endsection
