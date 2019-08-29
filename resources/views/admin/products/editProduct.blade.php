@extends('layouts.master')
@section('assets')
<script src="https://code.jquery.com/jquery-2.x-git.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/products_css.css')}}">
@endsection

@section('contenido')

<div class="contact">
	<div class="rowRegisterProd">
		<div class="container-left col-md-3">
			<div class="contact-info">
        <i class="fa fa-cubes"></i>
				<h2>Editar producto</h2>
			</div>
		</div>
		<div class="container-rigth col-md-9">
			<div class="contact-form">
        <form method="POST" action="{{route('products.update',['id' => $product->id])}}" enctype="multipart/form-data" >
          @method('PUT')
          @csrf

    				<div class="form-group">
    				  <label class="control-label col-sm-2" for="name">{{ __('Nombre') }}</label>
    				  <div class="col-sm-10">
      					<input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Introduzca el nombre del producto" name="name"
                value = "{{$product->name}}" required autocomplete="name">
                 @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
    				  </div>
    				</div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="image">{{ __('Image') }}</label>
              <div class="col-sm-10">
                @if (isset($id)) <img src="{{$product->image}}" style="width: : 200px; height: 200px;" /> @endif
                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image', isset($image) ? $image : '')}}" required>
                  @error('image')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>
    				<div class="form-group">
    				  <label class="control-label col-sm-2" for="description">{{ __('Descripción') }}</label>
    				  <div class="col-sm-10">
                <!--<textarea class="form-control" rows="2" id="description" placeholder="Introduzca la descripción del producto"></textarea> -->
                <input type = "textarea" class="form-control  @error('description') is-invalid @enderror" rows="2" id="description" placeholder="Introduzca la descripción del producto"
                  name="description" value="{{$product->description}}" required autocomplete="description">
                  @error('description')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
    				  </div>
    				</div>
    				<div class="form-group">
    				  <label class="control-label col-sm-2" for="dimension">{{ __('Dimensión') }}</label>
    				  <div class="col-sm-10">
    					    <input type="text" class="form-control  @error('dimension') is-invalid @enderror" id="dimension" placeholder="Introduzca la dimensión del producto"
                  name="dimension" value="{{$product->dimension}}">
                  @error('dimension')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
    				</div>
    				<div class="form-group">
    				  <label class="control-label col-sm-2" for="category_id">Categoría:</label>
    				  <div class="col-sm-10">

                  
              <select class="form-control" name="category_id" id="category_id">
               
              <option value="{{$product->category}}" selected>
                  {{$miCategoria->name}}
              </option>
                  @foreach($categories as $category)
                      @if ($category->name != $product->category['name'])
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endif
                  @endforeach
               </select>
    				  </div>
    				</div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="price">{{ __('Precio') }}</label>
              <div class="col-sm-10">
                  <input type="number" step="0.01" class="form-control  @error('price') is-invalid @enderror" id="price" placeholder="Introduzca el  precio del producto"
                  name="price" value="{{$product->price}}" required>
                  @error('price')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="stock">{{ __('Stock') }}</label>
              <div class="col-sm-10">
                  <input type="number" class="form-control  @error('stock') is-invalid @enderror" id="stock" placeholder="Introduzca el stock inicial del producto"
                  name="stock" value="{{$product->stock}}" required>
                  @error('stock')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>
            <div class="form-group">
    				  <label class="control-label col-sm-2" for="marca_id">Marca: </label>
    				  <div class="col-sm-10">
              <select class="form-control" name="marca_id" id="marca_id">

                 
                  <option value="{{$product->marca_id}}" selected>
                      {{$miMarca->name}}
                  </option>

                  @foreach($brands as $brand)
                      @if ($brand->name != $product->brand['name'])
                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                      @endif
                  @endforeach
               </select>
    				  </div>
    				</div>
    				<div class="form-group">
    				  <div class="col-sm-offset-2 col-sm-10">
      					<button type="submit" class="button_register">
                  {{ __('Confirmar') }}
                </button>
    				  </div>
    				</div>
        </form>
        @if ($errors->any())
<div class="container alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
			</div>
		</div>
	</div>
</div>
@endsection
