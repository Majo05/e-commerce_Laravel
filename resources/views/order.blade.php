@extends('layouts.master')

@section('assets')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('contenido')

<div class="container col-10">
    <section class="row">

        <article class="col-12">
            <br>
            <section class="table-responsive">
                <table class="table table-striped">
                    <thead>

                        <tr>
                          <th style="width:5%">Foto</th>
                          <th style="width:50%">Descripcion</th>
                          <th style="width:10%">Stock</th>
                          <th style="width:8%">Cantidad</th>
                          <th style="width:10%">Precio</th>
                          <th style="width:22%" class="text-center">Subtotal</th>
                          <th style="width:5%"></th>
                        </tr>
                    </thead>
                    <tbody>
                      {{-- @dd($product); --}}
                      @if (session()->get('carrito.products'))
                        @php
                          $itemSession = 0;
                          $total = 0;
                        @endphp
                      @foreach (session()->get('carrito.products') as $product)
                        @php
                          $total = $total + $product->price;
                        @endphp
                        <tr>
                         <td data-th="Foto">
                           <div class="row">
                           <div class="col-sm-2 hidden-xs"><img src="{{asset('storage/'.$product->image)}}" alt="..." class="img-responsive" />
                             </div>
                         <td data-th="Producto / Descripcion">
                           <div class="row">
                             <div class="col-sm-10">
                               <h4 class="nomargin">{{$product->name}}</h4>
                                 <p><{{$product->description}}</p>
                             </div>
                           </div>
                         </td>
                         <td data-th="Stock">{{$product->stock_id}}</td>
                         <td data-th="Cantidad">
                          <input id="quantity" type="number" class="form-control text-center" value="1">
                         </td>
                         <td data-th="Precio">{{$product->price}}</td>
                         <td data-th="Subtotal" class="text-center">$ {{$total}}</td>
                         <td class="actions" data-th="">
                           <a href="/order/remove/{{$product->id}}"><button class="btn btn-danger btn-m">Delete</button></a>
                         </td>
                         @endforeach
                     </tr>

                    <td class="total"></td>
                        <td></td>


                    </tbody>

                    <tfoot>
                      <tr>
                        <td><button type="submit"><a href="carrito/flush" class="btn btn-warning"><i class="fa fa-angle-left"></i> Vaciar</a></button></td>
                        <td colspan="4" class="hidden-sm"></td>
                        <td class="hidden-sm text-center">$ {{$total}} </td>
                        <td><a href="/carrito/checkout" class="btn btn-success btn-block">Comprar <i class="fa fa-angle-right"></i></a></td>
                      </tr>
                      @else
                      <div class='container mb-5 mt-5'>
                          <h2 class='text-center mb-5 mt-5'> Aún no ha agregado ningún producto al carrito </h2>
                      </div>
                      @endif
                    </tfoot>

                </table>
            </section>
        </article>

</section>
</div>

<script src ="{{asset('js/cart.js')}}"></script>
@endsection
