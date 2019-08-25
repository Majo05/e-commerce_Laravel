@extends('layouts.master')
@section('assets')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/products_css.css">
@endsection

@section('contenido')
  <!--  <main> -->
        <div class="bg-primary text-center col-md-12">
          <p class="lead text-white">LISTA DE PRODUCTOS</p>
        </div>
        <div>
          <div class="d-flex card col-12" >
            <a href="{{route('products.create')}}" class="btnAdd col-1"><i class="fa fa-plus-circle" data-toggle="tooltip" title="Delete"></i></a>
            <table class="table" >
                <thead>
                    <tr class ='encabezado_color'>
                        <th>NOMBRE</th>
                        <th>DIMENSION</th>
                        <th>PRECIO</th>
                        <th>STOCK</th>
                      <!--  <th>CATEGORIA</th>
                        <th>MARCA</th>-->
                          <th> </th>
                          <th> </th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($products as $product)
                        <tr>
                          <td><a href="{{route('products.show',['id' => $product->id])}}">{{$product->name}}</a></td>
                            <td>{{$product->dimension}}</td>
                            <td>
                                {{$product->price}}
                            </td>
                            <td>
                                {{$product->stock}}
                            </td>
                            <td>
                                {{$product->category_id['name']}}
                            </td>
                            <td>
                                {{$product->marca_id['name']}}
                            </td>
                            <td class="tdAcciones">
                                <div class="col-sd-12">
                                  <a href="{{route('products.show',['id' => $product->id])}}"
                                    class="btngrid col-sd-4"><i class="fa fa-search" data-toggle="tooltip" title="View"></i></a>
                                  <a href="{{route('products.edit', ['id' => $product->id])}}" class="btngrid col-sd-4">
                                    <i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i>
                                  </a>
                                  <!--  <form id='{{$product->id}}' action="/eliminar/{{$product->id}}" method="post">
                                    <!--  @method('DELETE')-->
                                    <!--  @csrf-->
                                      <a id='delete-link-{{$product->id}}' href="/eliminar/{{$product->id}}" class="btngrid col-sd-4"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                                  <!--  </form>-->
                                </div>
                            </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
            <div>
                {{$products->links()}}
            </div>
          </div>

        </div>
  <!--    </main>-->
@endsection
