@extends('layouts.master')
@section('contenido')
<br><br><br><br>
<div class="container" >

    <h1>Registro</h1>

<form action="" method="POST" enctype= "multipart/form-data">
    <div>
        <label for="exampleInputName">Nombre</label>

        <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="name"
        placeholder="Escribe tu nombre" value="">
        <small class="form-text text-danger"></small>
        <small id="name" class="form-text text-muted"></small>

    </div>
    <div class="form-group">
        <label for="exampleInputName">Apellido</label>

        <input name="lastname" type="text" class="form-control" id="exampleInputName" aria-describedby="lastname"
        placeholder="Escribe tu apellido" value="">
        <small class="form-text text-danger"></small>
        <small id="lastname" class="form-text text-muted"></small>

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Correo Electronico</label>
        <input name="email" type="email" value="" class="form-control" id="exampleInputEmail1" aria-describedby="email"
        placeholder="Escribe tu email">
        <small class="form-text text-danger"></small>
        <small id="email" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
                    <label for="nombre">Tipo Documento</label>
                    <select class="form-control" name="doctype_id" id="doctype_id">
                        <option value="" selected>Seleccione Categoria</option>

                        <option value=""></option>

                    </select>
                    <small class="form-text text-danger"></small>
        <small id="doctype_id" class="form-text text-muted"></small>
                </div>

    <div class="form-group">
        <label for="exampleInputName">Número de Documento</label>

        <input name="nroDoc" type="text" class="form-control" id="exampleInputName" aria-describedby="nroDoc"
        placeholder="Escribe tu Numero de Documento" value="">
        <small class="form-text text-danger"></small>
        <small id="nroDoc" class="form-text text-muted"></small>

    </div>

    <div class="form-group">
        <label for="exampleInputName">Telefono</label>

        <input name="phone" type="text" class="form-control" id="exampleInputName" aria-describedby="phone"
        placeholder="Escribe tu Telefono anteponiendo código de área y sin guiones" value="">
        <small class="form-text text-danger"></small>
        <small id="phone" class="form-text text-muted"></small>

    </div>

    <div class="form-group">
        <label for="exampleInputName">Direccion</label>

        <input name="address" type="text" class="form-control" id="exampleInputName" aria-describedby="address"
        placeholder="Escribe tu direccion" value="">
        <small class="form-text text-danger"></small>
        <small id="address" class="form-text text-muted"></small>

    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input name="password" type="password"  class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
        <small class="form-text text-danger"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Repetir Contraseña</label>
        <input name="repassword" type="password"  class="form-control" id="exampleInputPassword1" placeholder="Reescriba su contraseña">
        <small class="form-text text-danger"></small>
    </div>

    <div class="form-group">
        <label for="exampleInputName">Imagen</label>

        <input name="avatar" type="file" class="form-control" id="exampleInputName" aria-describedby="avatar"
        placeholder="Selecciona una imagen" value="">
        <small class="form-text text-danger"></small>
        <small id="avatar" class="form-text text-muted"></small>

    </div>

        <button type="submit" class="btn btn-primary">Registrar</button>

</form>
</div>

@endsection
